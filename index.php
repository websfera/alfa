<?php

date_default_timezone_set('Europe/Prague');

use Tracy\Debugger;
use App\Controllers\NoteController;

require "vendor/autoload.php";

Debugger::enable(Debugger::DEVELOPMENT);

function dd($var) {
  Debugger::barDump($var);
}

require 'app/config/config.php';
$container = new App\Container($config);

dd($container->get("db_host"));

require("app/router.php");