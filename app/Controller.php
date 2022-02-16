<?php
namespace App;

use \App\View;

abstract class Controller {

  protected View $template;

  public function __construct() {
    $this->template = new View();
  }

  public function startup($actionName, $controllerName) {
    $this->template->setFile($controllerName . "/". $actionName . ".php");
    $this->template->controller = $this;
  }

  /**
    * @param string $destination Cilova lokace ve formatu controller/akce
    */
  public function link(string $destination) {
    return "https://alfa2021.milacekmartin.repl.co/" . "?route=" . $destination;
  }

}