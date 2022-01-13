<?php

use Tracy\Debugger;

require "vendor/autoload.php";

Debugger::enable(Debugger::DEVELOPMENT);

$user = new App\Models\User();
$user->firstName = "Martin";

Debugger::barDump($user);
