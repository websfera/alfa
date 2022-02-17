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