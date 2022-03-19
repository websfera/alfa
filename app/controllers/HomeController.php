<?php

namespace App\Controllers;

class HomeController extends \App\Controller {

  public function defaultAction() {

    $db = $this->container->getService('connection');
    dd($db);
    
    $note = new \App\Models\Note();
    $note->findById(1);
    
    dd($note);

    
    $this->template->nadpis1 = "Hlavní nadpis";
    $this->template->odstavec1 = "Lorem ipsum amet dollor........";
    $this->template->date = new \DateTime();

    $this->template->render();
  }

  public function testAction() {
    $this->template->render();
  }

}