<?php
namespace App;

use \App\View;
use \App\Container;

abstract class Controller {

  protected View $template;

  protected Container $container;
  
  public function __construct(Container $container) {
    $this->template = new View();
    $this->container = $container;
  }

  public function startup($actionName, $controllerName) {
    $this->template->setFile($controllerName . "/". $actionName . ".php");
    $this->template->controller = $this;
    $this->template->appName = $this->container->get("appName");
  }

  /**
    * @param string $destination Cilova lokace ve formatu controller/akce
    */
  public function link(string $destination) {
    return $this->container->get("baseUrl") . "?route=" . $destination;
  }

  public function redirect(string $destination = "home/default") {
    header("Location: " . $this->link($destination));
  }

}