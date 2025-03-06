<?php 
if (!session_id())session_start(); 

define('parentRoot', realpath(dirname(dirname(__FILE__))));		//path lego
define('DSI', DIRECTORY_SEPARATOR); 							

//var_dump(parentRoot . DSI . 'system' . DSI . 'init.php');

require_once parentRoot . DSI . 'config' . DSI . 'init.php';

$app = new App;







