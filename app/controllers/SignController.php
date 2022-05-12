<?php

namespace App\Controllers;

class SignController extends \App\Controller {

  public function inAction() {
    
  }

  public function outAction() {
    
  }

  public function upAction() {
    $birthDate = \DateTime::createFromFormat('d.m.Y', '01.01.1990');
    
    $u = $this->container->createUser();
    $u->setFirstName("Martin");
    $u->setLastName("Milacek");
    $u->setEmail("martin@milacek.eu");
    $u->setPassword("tajneHeslo");
    $u->setBirthDate($birthDate);

    //$u->save();
    
    dd($u);
  }
  
}
