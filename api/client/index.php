<?php
namespace SakuraPanel;

use SakuraPanel;

include(ROOT . "/core/Database.php");

//$pm = new ProxyManager();
$userToken=$_GET['token'];
$rs = Database::querySingleLine("tokens", ["token" => $userToken]);

var_dump($rs);
