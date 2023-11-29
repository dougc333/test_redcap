<?php
namespace Vanderbilt\REDCap\Classes\Fhir\Resources;


use JsonSerializable;
use Vanderbilt\REDCap\Classes\JsonParser\Nodes\Node;
use Vanderbilt\REDCap\Classes\JsonParser\Nodes\NodeFactory;
use Vanderbilt\REDCap\Classes\JsonQuery\JsonQuery;


abstract class AbstractResource implements JsonSerializable, ResourceInterface
{
  
  
  /**
   *
   * @var Node
   */
  private $scraper;
  
  private $query;
  private $payload;

  public function __construct($payload)
  {
    $this->payload = $payload;
  }

  public function getPayload()
  {
    return $this->payload;
  }

  public function isEmpty()
  {
    return empty($this->payload);
  }

  /**
   * always return to first state
   * of the query before serving it
   *
   * @return JsonQuery
   */
  public function query()
  {
    // return JsonQuery::from($this->payload);
    // cache the JsonQuery object
    if(!$this->query) $this->query = JsonQuery::from($this->payload);
    // revert to the original state
    $this->query->reset();
    return $this->query;
  }

  public function scraper() {
    if(!$this->scraper) $this->scraper = NodeFactory::make($this->payload);
    return $this->scraper;
  }

  /**
   *
   * @param ResourceVisitorInterface $visitor
   * @return mixed
   */
  public function accept($visitor)
  {
    return $visitor->visit($this);
  }

  public function getMetadata()
  {
    $metadata = [
      'payload' => $this->payload,
    ];
    return $metadata;
  }

  #[\ReturnTypeWillChange]
  public function jsonSerialize()
  {
    $data = $this->getData();
    $metadata = $this->getMetadata();
    return compact('data', 'metadata');
  }

  /**
   * create a new observation
   * replacing the existing payload with
   * the provided one
   *
   * @param string $key
   * @param array $payload
   * @return AbstractResource
   */
  protected function replacePayload($parentPayload, $payload) {
    $merged = array_merge($parentPayload, $payload);
    return new static($merged);
  }

}