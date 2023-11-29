<?php
namespace Vanderbilt\REDCap\Classes\Fhir\Resources\Traits;

trait CanAccessArrayProperty
{


  private static function isValidRegex($regexp_string)
  {
    $valid = @preg_match($regexp_string, null);
    return $valid!==false;
  }

  /**
   * get the whole payload or any child
   * at a specific path
   *
   * @param array $array
   * @param string $path
   * @return array
   */
  protected static function getArrayProperty($array, ...$path)
  {
    $current = $array;
    while($key = current($path)) {
      if(!array_key_exists($key, $current)) return;
      $current = $current[$key];
      next($path);
    }
    return $current;
  }

 
}