<?php
namespace App;

use \App\View;

class Controller {

  protected View $template;

  public function __construct() {
    $this->template = new View();
  }

  public function startup($actionName, $controllerName) {
    $this->template->setFile($controllerName . "/". $actionName . ".php");
  }

}