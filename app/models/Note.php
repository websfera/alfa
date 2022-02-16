<?php

namespace App\Models;

use \Datetime;

class Note {

  protected string $title;
  protected string $text;
  protected Datetime $dateCreated;
  protected ?Datetime $dateUpdated;
  protected string $author;

  public function __construct(string $author) {
    $this->dateCreated = new Datetime();
    $this->author = $author;
  }

  public function getTitle(): string {
    return $this->title;
  }

  public function setTitle(string $newTitle): void {
    $this->title = $newTitle;
  }

}