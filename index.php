<?php

use Tracy\Debugger;
use App\Controllers\NoteController;

require "vendor/autoload.php";

Debugger::enable(Debugger::DEVELOPMENT);

function dd($var) {
  Debugger::barDump($var);
}

require("app/router.php");