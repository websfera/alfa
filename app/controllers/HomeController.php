<?php

namespace App\Controllers;

class HomeController extends \App\Controller {

  public function defaultAction() {
    
    $db = new \App\DB\mPDO(
      'milacek.eu',
      'alfa',
      '4lf4',
      'alfa'
    );

    $rows = $db->query("SELECT title, text FROM alfa.note;");
    
    dd($rows);

    
    $this->template->nadpis1 = "Hlavní nadpis";
    $this->template->odstavec1 = "Lorem ipsum amet dollor........";
    $this->template->date = new \DateTime();

    $this->template->render();
  }

  public function testAction() {
    $this->template->render();
  }

}