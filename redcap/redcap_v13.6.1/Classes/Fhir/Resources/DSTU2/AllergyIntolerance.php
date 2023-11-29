<?php
namespace Vanderbilt\REDCap\Classes\Fhir\Resources\DSTU2;

use Vanderbilt\REDCap\Classes\Fhir\Resources\AbstractResource;
use Vanderbilt\REDCap\Classes\Fhir\Resources\Shared\CodingSystem;
use Vanderbilt\REDCap\Classes\Fhir\Resources\Traits\CanNormalizeTimestamp;

class AllergyIntolerance extends AbstractResource
{
  use CanNormalizeTimestamp;

  const TIMESTAMP_FORMAT = 'Y-m-d';

  public function recordedDate()
  {
    return $this->query()
      ->select('#/recordedDate')
      ->results()
      ->single();
  }

  public function clinicalStatus()
  {
    return $this->query()
      ->select('#/status')
      ->results()
      ->single();
  }

  public function getText()
  {
    return $this->query()
      ->select('#/substance/text')
      ->results()
      ->single();
  }

  public function getNdfRt()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::NDF_RT)
      ->results()
      ->expand(0);
  }

  public function getFdaUnii()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::FDA_UNII)
      ->orWhere(
        ['system', 'like', CodingSystem::FDA_UNII_2],
        ['system', 'like', CodingSystem::FDA_UNII_3]
      )
      ->results()
      ->expand(0);
  }

  public function getRxnorm()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::RxNorm)
      ->orWhere('system', 'like', CodingSystem::RxNorm_2)
      ->results()
      ->expand(0);
  }

  public function getSnomed()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::SNOMED_CT)
      ->orWhere('system', 'like', CodingSystem::SNOMED_CT_1)
      ->results()
      ->expand(0);
  }

  public function ndfRtDisplay()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::NDF_RT)
      ->orWhere('system', 'like', CodingSystem::NDF_RT_1)
      ->select('display$')
      ->results()
      ->single();
  }

  public function ndfRtCode()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::NDF_RT)
      ->orWhere('system', 'like', CodingSystem::NDF_RT_1)
      ->select('code$')
      ->results()
      ->single();
  }

  public function fdaUniiDisplay()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::FDA_UNII)
      ->orWhere(
        ['system', 'like', CodingSystem::FDA_UNII_2],
        ['system', 'like', CodingSystem::FDA_UNII_3]
      )
      ->select('display$')
      ->results()
      ->single();
  }

  public function fdaUniiCode()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::FDA_UNII)
      ->orWhere(
        ['system', 'like', CodingSystem::FDA_UNII_2],
        ['system', 'like', CodingSystem::FDA_UNII_3]
      )
      ->select('code$')
      ->results()
      ->single();
  }

  public function rxnormDisplay()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::RxNorm)
      ->orWhere('system', 'like', CodingSystem::RxNorm_2)
      ->select('display$')
      ->results()
      ->single();
  }

  public function rxnormCode()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::RxNorm)
      ->orWhere('system', 'like', CodingSystem::RxNorm_2)
      ->select('code$')
      ->results()
      ->single();
  }
  
  public function snomedDisplay()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::SNOMED_CT)
      ->orWhere('system', 'like', CodingSystem::SNOMED_CT_1)
      ->select('display$')
      ->results()
      ->single();
  }

  public function snomedCode()
  {
    return $this->query()
      ->select('#/substance/coding/\d+$')
      ->where('system', 'like', CodingSystem::SNOMED_CT)
      ->orWhere('system', 'like', CodingSystem::SNOMED_CT_1)
      ->select('code$')
      ->results()
      ->single();
  }

  public function getNormalizedTimestamp()
  {
    $timestamp = $this->recordedDate();
    return $this->getGmtTimestamp($timestamp, self::TIMESTAMP_FORMAT);
  }

  /**
   * return the relevant data for the resource
   *
   * @return array
   */
  public function getData()
  {
    return [
      'recorded_date' => $timestamp = $this->recordedDate(),
      'normalized_timestamp' => $this->getGmtTimestamp($timestamp, self::TIMESTAMP_FORMAT), // convert to proper date
      'clinical_status' => $this->clinicalStatus(),
      'text' => $this->getText(),
      'ndf_rt_display' => $this->ndfRtDisplay(),
      'ndf_rt_code' => $this->ndfRtCode(),
      'fda_unii_display' => $this->fdaUniiDisplay(),
      'fda_unii_code' => $this->fdaUniiCode(),
      'snomed_display' => $this->snomedDisplay(),
      'snomed_code' => $this->snomedCode(),
      'rxnorm_display' => $this->rxnormDisplay(),
      'rxnorm_code' => $this->rxnormCode(),
      // 'ndfRt' => $this->getNdfRt(),
      // 'fdaUnii' => $this->getFdaUnii(),
      // 'rxnorm' => $this->getRxnorm(),
      // 'snomed' => $this->getSnomed(),
    ];
  }
  
}