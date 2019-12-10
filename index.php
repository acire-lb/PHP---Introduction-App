<?php
session_start(); //start of session

// This script goes to a specified controller
if ( isset($_REQUEST["ctr"]) ){
    $ControllerName = $_REQUEST["ctr"];
    require_once ("Controller\\".$ControllerName.".php");//from the controller folder
}
else
require_once "Controller\NavigationController.php";//Navigation Controller

?>
