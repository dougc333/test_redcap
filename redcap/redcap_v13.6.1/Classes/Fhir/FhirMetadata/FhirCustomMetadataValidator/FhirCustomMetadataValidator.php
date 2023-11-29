<?php
namespace Vanderbilt\REDCap\Classes\Fhir\FhirMetadata\FhirCustomMetadataValidator;

use Vanderbilt\REDCap\Classes\Utility\CSVHelper;



class FhirCustomMetadataValidator
{
  
  /**
   *
   * @var FhirCustomMetadataValidationStrategy[]
   */
  private $strategies;
  
  /**
   *
   * @param FhirCustomMetadataValidationStrategy[] $strategies
   */
  public function __construct(array $strategies) {
    $this->strategies = $strategies;
  }
  
  public function validate($file) {
    $rows = $this->parseCSV($file);
    $header = isset($rows[0]) ?  array_keys($rows[0]) : false;
    
    // Validate CSV using each strategy in order
    foreach ($this->strategies as $strategy) {
      if (!$strategy->validate($header, $rows)) {
        return false;
      }
    }
    
    // If we get here, the CSV file is valid
    return true;
  }
  
  /**
   * parse a CSV file
   *
   * @param string $file path to file
   * @return array rows of data in associative array
   */
  private function parseCSV($file) {
    $fileContent = file_get_contents($file);
    $data = CSVHelper::csvToArray($fileContent);
    return $data;
  }
  
}