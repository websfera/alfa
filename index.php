<?php

date_default_timezone_set('Europe/Prague');

use Tracy\Debugger;
use App\Controllers\NoteController;

require "app/exceptions.php";
require "vendor/autoload.php";

Debugger::enable(Debugger::DEVELOPMENT);

function dd($var) {
  Debugger::barDump($var);
}

session_start();

if (!isset($_SESSION['isLogged'])) {
  $_SESSION['isLogged'] = false;
}

require("app/router.php");