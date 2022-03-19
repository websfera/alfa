<?php

namespace App;

class Container {

  private array $parameters = [];

  private array $services = [];

  public function __construct(array $parameters) {
    $this->parameters = $parameters;  
  }

  public function getService(string $serviceName) {
    if (isset($this->services[$serviceName])) {
      return $this->services[$serviceName];
    } else {
      $factoryName = "create" . ucfirst($serviceName);
      // TODO check if factory exists
      $this->services[$serviceName] = $this->{$factoryName}();
      return $this->services[$serviceName];
    }
  }

  private function createConnection() {
    return new \App\DB\mPDO(
      $this->get('db_host'),
      $this->get('db_user'),
      $this->get('db_pass'),
      $this->get('db_dbname')
    );
  }
  
  public function get(string $key): ?string {
    if (isset($this->parameters[$key])) {
      return $this->parameters[$key];
    } else {
      return null;
    }
  }
  
}