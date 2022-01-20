<?php

use Tracy\Debugger;
use App\Controllers\NoteController;

require "vendor/autoload.php";

Debugger::enable(Debugger::DEVELOPMENT);

function dd($var) {
  Debugger::barDump($var);
}

require("app/router.php");




if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  die("Neni obsazen parametr action.");
}

$actionName = strtolower($action) . "Action";

$noteController = new \App\Controllers\NoteController();

if (!method_exists($noteController, $actionName)) {
  die("Metoda " . $actionName . " není definována.");
}

$noteController->{$actionName}();

//Debugger::barDump($test);
