<?php

namespace App\Models;

use App\Container;
use App\DB\mPDO;

abstract class AbstractEntity {

  protected int $id;

  protected Container $container;
  protected mPDO $db;

  public function __construct(Container $container) {
    $this->container = $container;
    $this->db = $this->container->getService("connection");
  }
  
  public function getId(): int {
    return $this->id;  
  }
  
}