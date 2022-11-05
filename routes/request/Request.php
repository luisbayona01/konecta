<?php 
  
  class Request 
  {  
     public   function __construct(){
      $url= str_replace('konecta/','', $_SERVER['REQUEST_URI']);
      //echo $url;
      $urls=parse_url(trim($url,'/'),PHP_URL_PATH)?:'/';
      
      $this->url= $urls;
     $this->method=$_SERVER['REQUEST_METHOD'];
    
     $this->params=array_slice(explode("/",trim($url,'/')), 1) ?: null;
    
    }
      public function getUrl() {
          return $this->url;
      }

      public function getMethod() {
          return $this->method;
      }

      public function getParams() {
          return $this->params;
      }

      public function setUrl($url) {
          $this->url = $url;
      }

      public function setMethod($method) {
          $this->method = $method;
      }

      public function setParams($params) {
          $this->params = $params;
      }

        	


  }



