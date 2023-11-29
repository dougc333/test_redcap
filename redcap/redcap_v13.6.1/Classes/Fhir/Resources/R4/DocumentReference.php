<?php
namespace Vanderbilt\REDCap\Classes\Fhir\Resources\R4;

use Files;
use Exception;
use ZipArchive;
use Vanderbilt\REDCap\Classes\Fhir\FhirClient;
use Vanderbilt\REDCap\Classes\Fhir\Resources\AbstractResource;
use Vanderbilt\REDCap\Classes\Fhir\Resources\Shared\CodeableConcept;
use Vanderbilt\REDCap\Classes\Fhir\Resources\Traits\CanNormalizeTimestamp;
use Vanderbilt\REDCap\Classes\Traits\CanConvertMimeTypeToExtension;

class DocumentReference extends AbstractResource
{
  use CanNormalizeTimestamp;
  use CanConvertMimeTypeToExtension;

  const TIMESTAMP_FORMAT = 'Y-m-d H:i';

  /**
   * When this document reference was created
   *
   * @return string
   */
  public function getDate()
  {
    return $this->scraper()->date->join('');
  }

  /**
   * Who and/or what authored the document
   *
   * @param integer $index
   * @return void
   */
  public function getAuthor($index=0) {
    return $this->scraper()->author[$index]->getData();
  }

  public function getAuthorType($index=0) {
    return $this->scraper()->author[$index]->type->join('');
  }

  public function getAuthorReference($index=0) {
    return $this->scraper()->author[$index]->reference->join('');
  }

  public function getAuthorDisplay($index=0) {
    return $this->scraper()->author[$index]->display->join('');
  }

  public function getAttachments() {
    $attachments = $this->scraper()->content->attachment->getData();
    return $attachments;
  }

  public function getType() {
    $codingsPayload = $this->scraper()->type[0]->getData();
    return new CodeableConcept('type', $codingsPayload);
  }
  public function getTypeText() {
    $type = $this->getType();
    if(!($type instanceof CodeableConcept)) return '';
    return $type->getText();
  }

  public function getData()
  {
    $data = [
      'type' => $this->getTypeText(),
      'date' => $this->getDate(),
      'author_type' => $this->getAuthorType(),
      'author_display' => $this->getAuthorDisplay(),
      // 'attachments' => $this->getAttachments(),
      // 'links' => '',
    ];
    return $data;
  }

  /**
   *
   * @param FhirClient $fhirClient
   * @param String $destinationFolder
   * @return void
   */
  public function saveAttachments(FhirClient $fhirClient)
  {    
    $attachments = $this->getAttachments();
    if(count($attachments)===0) return;
    
    $destinationFolder = rtrim(APP_PATH_TEMP, '/');
    $zip = new ZipArchive();
    $zipTmpName = Files::generateUniqueFileName($destinationFolder);
    $zipPath = $destinationFolder.DIRECTORY_SEPARATOR.$zipTmpName;
    $zip->open($zipPath, ZipArchive::CREATE);

    foreach ($attachments as $attachment) {
      $URL = $attachment['url'];
      $contentType = $attachment['contentType'];
      $title = $attachment['title'] ?? 'untitled';
      $request = $fhirClient->getFhirRequest($relative_url=$URL, $method='GET', $options=[]);
      $token = $fhirClient->getToken();
      $response = $request->send($token->access_token);
      $data = strval($response);
      $extension = $this->mime2ext($contentType);
      $fileName = $title . ($extension ? ".$extension" : '');
      $zip->addFromString($fileName, $data);
    }
    $zip->close();

    $file = Files::makeFileStructure('attachments.zip', $zipPath, 'application/zip');
    $projectID = $fhirClient->getProjectID();
    $fileID = Files::uploadFile($file, $projectID);
    return $fileID;
  }

  /**
   * save links to the binary files
   * as an HTML file
   *
   * @param integer $projectID
   * @return integer ID of the uploaded HTML file
   */
  public function saveLinks($projectID) {
    $getLinksHtml = function($links) {
      $html = "<ul>";
      foreach ($links as $link) {
        $html .= PHP_EOL."<li>{$link}</li>";
      }
      $html .= PHP_EOL."</ul>";
      return $html;
    };
    $links = $this->getLinks($projectID);
    $html = $getLinksHtml($links);
    
    $uploadPath = Files::uploadFromString($html, APP_PATH_TEMP);
    $file = Files::makeFileStructure('links.html', $uploadPath, 'text/html');
    $fileID = Files::uploadFile($file, $projectID);
    return $fileID;
  }

  public function getLinks($projectID) {
    $getAttachmentProxyURL = function($projectID, $url) {
      $query = http_build_query([
        'pid' => $projectID,
        'route' => 'FhirProxyController:forward',
        'url' => $url,
      ]);
      $redcapBase = rtrim(APP_PATH_WEBROOT_FULL . 'redcap_v' . REDCAP_VERSION, '/');
      $proxyURL = $redcapBase."/?{$query}";
      return $proxyURL;
    };

    $typeText = null;
    $type = $this->getType();
    if($type instanceof CodeableConcept) $typeText = $type->getText();
    $attachments = $this->getAttachments();
    $links = [];
    foreach ($attachments as $attachment) {
      $URL = $attachment['url'];
      $proxyURL = $getAttachmentProxyURL($projectID, $URL);
      $title = $attachment['title'] ?? ($typeText ?? 'untitled');
      $contentType = $attachment['contentType'];
      $link = sprintf('<a href="%s">%s (%s)</a>', $proxyURL, $title, $contentType);
      $links[] = $link;
    }
    return $links;
  }


  /**
   * create a zip file with the attachments of the resource
   *
   * @param array $files
   * @param [type] $destinationFolder
   * @return array|null a file structure or null on error
   * @throws Exception if the system cannot create zip files
   */
  private function storeFiles($files=[], $destinationFolder)
  {
    if(empty($files)) return;

    if (!Files::hasZipArchive()) {
      throw new Exception('ERROR: ZipArchive is not installed. It must be installed to use this feature.', 0);
    }

    $zip = new ZipArchive();
    $destinationFolder = rtrim($destinationFolder, '/');
    $zipTmpName = Files::generateUniqueFileName($destinationFolder);
    $zipPath = $destinationFolder.DIRECTORY_SEPARATOR.$zipTmpName;
    $zip->open($zipPath, ZipArchive::CREATE);
    foreach ($files as $file) {
      $filePath = $file['tmp_name'];
      $fileName = $file['name'];
      $zip->addFile($filePath, $fileName);
    }
    $zipped = $zip->close();
    if(!$zipped) return;
    $file =[
      'name' => $zipName = 'attachments',// name: "Unknown-1.png"
      'type' => 'application/zip',// type: "image/png"
      'tmp_name' => $zipPath, // tmp_name: "/tmp/php9IO1Qy"
      'error' => UPLOAD_ERR_OK,// error: 0
      'size' => $zipSize = filesize($zipPath),// size: 185269
    ];
    return $file;
  }
}