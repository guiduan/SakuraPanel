<?php
namespace SakuraPanel;

use SakuraPanel;

define("ROOT", realpath(__DIR__ . "/../../"));

include(ROOT . "/core/Database.php");

//$pm = new ProxyManager();
$userToken=$_GET['token'];
$rs = Database::querySingleLine("tokens", ["token" => $userToken]);

var_dump($rs);
