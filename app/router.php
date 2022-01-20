<?php

if (empty($_GET['route'])) {
  $route = "home";
} else {
  $route = $_GET['route'];
}

// url ocekavame ve tvaru controller/action
$routeArray = explode("/", $route);

dd($routeArray);

