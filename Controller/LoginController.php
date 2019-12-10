<?php
require_once "Model/LoginModel.php";
class LoginController
{
    private $view =  "LoginView.php";
    private $title = "Login to View Lessons";
     private $login = "Login";
     
    function __construct(){
        if(isset($_REQUEST["cmd"]))
        switch($_REQUEST["cmd"]){
            case "home": 
                 $this->view = "HomeView.php";
                 break;
            default: 
                 $this->view = "LoginView.php";
        }
        
         if( isset($_REQUEST["name"])){
        	$this->login  $_REQUEST["name"];
        $_SESSION["name"] = $lcName;

        }
        require_once( "View//".$this->view);
    }
    
}

$LoginController = new LoginController();
?>