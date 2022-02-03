<?php

namespace App\Controllers;

use \App\View;

class HomeController {

  protected View $template;

  public function __construct() {
    $this->template = new View();
  }

  public function defaultAction() {
    $this->template->setFile("home/default.php");
    $this->template->nadpis1 = "Hlavní ..... nadpis";
    $this->template->dnes = new \DateTime();

    dd($this->template);

    $this->template->render();
  }

  public function testAction() {
    $this->template->setFile("home/test.php");

    $this->template->render();
  }

}