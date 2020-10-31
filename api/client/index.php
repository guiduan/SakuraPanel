<?php
namespace SakuraPanel;

use SakuraPanel;

define("ROOT", realpath(__DIR__ . "/../../"));

include(ROOT . "/configuration.php");
include(ROOT . "/core/Database.php");

$conn = null;
$db = new SakuraPanel\Database();

include(ROOT . "/core/UserManager.php");
include(ROOT . "/core/NodeManager.php");
include(ROOT . "/core/ProxyManager.php");

$pm = new ProxyManager();
$nm = new NodeManager();
$token = $_GET['token'];
$sel_server = $_GET['server']
$rs = Database::querySingleLine("tokens", ["token" => $token]);
if($rs) {
  $pm->getUserProxiesConfig($rs['username'], $sel_server);
}
//$sel_server=$_GET['server']

//$pm->getUserProxiesConfig($user, $sel_server);
