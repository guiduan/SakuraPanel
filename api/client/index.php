<?php
namespace SakuraPanel;

use SakuraPanel;

define("ROOT", realpath(__DIR__ . "/../../"));

include(ROOT . "/core/Database.php");

$conn = null;
$db = new SakuraPanel\Database();

include(ROOT . "/core/UserManager.php");
include(ROOT . "/core/NodeManager.php");
include(ROOT . "/core/ProxyManager.php");

$pm = new ProxyManager();
$nm = new NodeManager();
$user=$_GET['user'];
$sel_server=$_GET['server']

$pm->getUserProxiesConfig($user, $sel_server)
