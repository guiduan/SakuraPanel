<?php
namespace SakuraPanel;

use SakuraPanel;
$pm = new SakuraPanel\ProxyManager();
$userToken=$_GET['token'];
$rs = Database::querySingleLine("tokens", ["token" => $userToken]);

var_dump($rs);
