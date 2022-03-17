<?php

namespace App\DB;

use \PDO;

final class mPDO {

  private PDO $pdo;

  private $statement = null;

  // mysql:host=milacek.eu;port=3306;dbname=alfa
  public function __construct(
    string $hostname,
    string $username,
    string $password,
    string $database,
    int $port = 3306
  ) {
    $dsn = "mysql:host=" . $hostname . ";port=" . $port . ";dbnam=" . $database;
    $options = [PDO::ATTR_PERSISTENT => true];
    
    $this->pdo = new PDO($dsn, $username, $password, $options);

    $this->pdo->exec("SET NAMES 'utf8'");
    //$this->pdo->exec("SET CHARACTER SET utf8");
    $this->pdo->exec("SET CHARACTER_SET_CONNECTION=utf8");
    $this->pdo->exec("SET SQL_MODE = ''");
  }

  public function query(string $sql, array $params = []): ?array {
    $this->statement = $this->pdo->prepare($sql);
    $result = null;
    
    if($this->statement && $this->statement->execute($params)) {
      $data = [];

      while ($row = $this->statement->fetch(PDO::FETCH_ASSOC)) {
        $data[] = $row;
      }

      $result = $data; 
    }

    return $result;
  }
  
}