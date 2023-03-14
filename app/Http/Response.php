<?php


namespace App\Http;

class Response
{
  /**
   * @var integer
   */
  private $httpCode = 200;

  /**
   * @var array
   */
  private $headers = [];

  /**
   * @var string
   */
  private $contentType = 'text/html';

  /**
   * @var mixed
   */
  private $content;


  /**
   * @param integer $httpCode
   * @param mixed $content
   * @param string $contentType
   */
  public function __construct($httpCode, $content, $contentType = 'text/html')
  {
    $this->httpCode = $httpCode;
    $this->content = $content;
    $this->setContentType($contentType);
  }

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
    $this->addHeader('Content-Type', $contentType);
  }

  public function addHeader($key, $value)
  {
    $this->headers[$key] = $value;
  }

  private function sedHeaders()
  {
    http_response_code($this->httpCode);
    foreach ($this->headers as $keys => $values) header(implode(': ', [$keys, $values]));
  }

  public function sendResponse()
  {
    $this->sedHeaders();

    switch ($this->contentType) {
      case 'text/html':
        echo $this->content;
        exit;
    }
  }
}
