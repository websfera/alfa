<?php

namespace App\Models\Repository;

use App\Container;
use App\DB\mPDO;
use App\Models\Note;

final class NoteRepository {

  protected Container $container;
  protected mPDO $db;

  public function __construct(Container $container) {
    $this->container = $container;
    $this->db = $this->container->getService('connection');
  }

  public function findAll(): Repository {
    $sql = "SELECT * FROM alfa.note;";

    $dbResult = $this->db->query($sql);

    $repository = new Repository();
    
    foreach($dbResult as $row) {
      $note = $this->container->createNote();
      $note->setValues($row);

      $repository->push($note);
    }
  
    return $repository;
  }
  
}
