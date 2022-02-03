<?php

namespace App;

class View {

  protected ?string $file;
  protected array $data;

  public function __construct() {
    $this->file = null;
    $this->data = [];
  }

  public function render(): void {

    // extrakce dat z pole DATA 
    extract($this->data);

    // nacist hlavicku sablony
    if (file_exists("app/views/common/header.php")) {
      include "app/views/common/header.php";
    } else {
      throw new \Exception("app/views/common/header.php not exists.");
    }

    // nacist obsah kontroleru a akce
    if (file_exists("app/views/" . $this->file)) {
      include "app/views/" . $this->file;
    } else {
      throw new \Exception("app/views/" . $this->file . " not exists.");
    }

    //nacis paticku sablony
    if (file_exists("app/views/common/footer.php")) {
      include "app/views/common/footer.php";
    } else {
      throw new \Exception("app/views/common/footer.php not exists.");
    }
  }

  public function __set($name, $value) {
      $this->data[$name] = $value;
  }

  public function __get($name) {
    return $data[$name];
  }

  public function getFile(): ?string {
    return $this->file;
  }

  public function setFile($filePath): void {
    $this->file = $filePath;
  }

  public function getData(): array {
    return $this->data;
  }

}
