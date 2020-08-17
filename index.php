<?php

ob_start();
define('URL','http://localhost/celkeEp2-v2/');

require "vendor/autoload.php";

$url = new Func\ConfigController();
$url->carregar();


?>