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
    include "app/views/common/header.php";

    // nacist obsah kontroleru a akce
    include "app/views/" . $this->file;

    //nacis paticku sablony
    include "app/views/common/footer.php";
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
