<?php

namespace App\Controllers;

class HomeController extends \App\Controller {

  public function defaultAction() {
    $this->template->nadpis1 = "Hlavní nadpis";
    $this->template->odstavec1 = "Lorem ipsum amet dollor........";
    $this->template->date = new \DateTime();
    dd(new \DateTime());
    $this->template->render();
  }

  public function testAction() {
    $this->template->render();
  }

}