<?php
namespace SakuraPanel;

use SakuraPanel;
//$pm = new ProxyManager();
$userToken=$_GET['token'];
$rs = Database::querySingleLine("tokens", ["token" => $userToken]);

var_dump($rs);
