<?php

namespace App;

class Container {

  private array $parameters = [];

  private array $services = [];

  public function __construct(array $parameters) {
    $this->parameters = $parameters;  
  }

  public function get(string $key): ?string {
    if (isset($this->parameters[$key])) {
      return $this->parameters[$key];
    } else {
      return null;
    }
  }
  
}