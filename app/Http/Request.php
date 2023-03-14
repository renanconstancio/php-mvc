<?php

namespace App\Http;

class Request
{
  private $httpMethod;

  private $uri;

  private $queryVars = [];

  private $postVars = [];

  private $headers = [];

  public function __construct()
  {
    $this->queryVars = $_GET ?? [];
    
    $this->postVars = $_POST ?? [];
    
    $this->headers = getallheaders();
    
    $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
    
    $this->uri = $_SERVER['REQUEST_URI'] ?? '';
  }


  public function getHttpMethod(){
    return $this->httpMethod;
  }

  public function getUri(){
    return $this->uri;
  }

  public function getQueryVars(){
    return $this->queryVars;
  }

  public function getPostVars(){
    return $this->postVars;
  }

  public function getHeaders(){
    return $this->headers;
  }

}
