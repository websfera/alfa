<?php

namespace App\Controllers;

class SignController extends \App\Controller {

  public function inAction() {
    $this->template->render();
  }

  public function proccessAction() {
    $data = $_POST;

    if (empty($data["email"]) || empty($data["password"])) {
      die("Vyplň email i heslo");
    }

    $user = $this->container->createUser();

    try {
      $user->findByEmail($data["email"]);
    } catch (\RecordNotFoundException $e) {
      die("Spatne prihlasovaci udaje!!!");
    }
    
    if (!$user->verifyPassword($data["password"])) {
      die("Spatne prihlasovaci udaje!!!");
    }

    $_SESSION['isLogged'] = true;
    $_SESSION['userId'] = $user->getId();
    $_SESSION['userEmail'] = $user->getEmail();

    $this->redirect();
  }
  
  public function outAction() {
    session_destroy();

    $this->redirect("sign/in");
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
