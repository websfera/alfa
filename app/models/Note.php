<?php

namespace App\Models;

use \Datetime;
use App\Container;

class Note extends AbstractEntity {

  protected string $title;
  protected string $text;
  protected Datetime $dateCreated;
  protected ?Datetime $dateUpdated = null;
  protected string $author;

  public function __construct(Container $container) {
    parent::__construct($container);
    $this->dateCreated = new Datetime();
  }
  
  public function findById(int $id) {
    $sql = "SELECT * FROM alfa.note WHERE id = ?;";
    $params = [$id];

    $rows = $this->db->query($sql, $params);

    if (count($rows) <= 0) {
      throw new \RecordNotFoundException("Record not found!");
    }

    $this->setValues($rows[0]);
  }

  public function setValues(array $values): void {
    $this->id = (int)$values['id'];
    $this->title = $values['title'];
    $this->text = $values['text'];

    $this->dateCreated = DateTime::createFromFormat(
      'Y-m-d H:i:s',
      $values['date_created']
    );

    if (!empty($values['date_updated'])) {
      $this->dateUpdated = DateTime::createFromFormat(
      'Y-m-d H:i:s',
      $values['date_updated']
    );
    }

    $this->author = $values['author'];
  }
  
  public function save(): void {
    $insert = "INSERT INTO alfa.note 
(`title`, `text`, `date_created`, `date_updated`, `author`) VALUES (?, ?, ?, ?, ?);";

    $dateUpdated = null;
    if ($this->dateUpdated !== null) {
      $dateUpdated = $this->dateUpdated->format("Y-m-d H:i:s");
    }
    
    $params = [
      $this->title,
      $this->text,
      $this->dateCreated->format("Y-m-d H:i:s"),
      $dateUpdated,
      $this->author,
      ];
    $this->db->query($insert, $params);
  }
  
  public function getTitle(): string {
    return $this->title;
  }

  public function setTitle(string $newTitle): void {
    $this->title = $newTitle;
  }

  public function setText(string $text): void {
    $this->text = $text;
  }

  public function getText(): string {
    return $this->text;
  }

  public function getDateCreated(): DateTime {
    return $this->dateCreated;
  }

  public function getDateCreatedFormatted(): string {
    return $this->dateCreated->format("d.m.Y H:i");
  }

  public function getDateUpdated(): ?DateTime {
    return $this->dateUpdated;
  }

  public function getAuthor(): string {
    return $this->author;
  }

  public function setAuthor(string $author): void {
    $this->author = $author;
  }
  
}