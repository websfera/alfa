<?php

namespace App\Models;

use \Datetime;

class Note {

  protected int $id;
  protected string $title;
  protected string $text;
  protected Datetime $dateCreated;
  protected ?Datetime $dateUpdated;
  protected string $author;

  public function __construct() {
    $this->dateCreated = new Datetime();
  }

  public function findById(int $id) {
    $db = new \App\DB\mPDO(
      'milacek.eu',
      'alfa',
      '4lf4',
      'alfa'
    );

    $sql = "SELECT * FROM alfa.note WHERE id = ?;";
    $params = [$id];

    $rows = $db->query($sql, $params);

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
  
  public function getId(): int {
    return $this->id;  
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
  
}