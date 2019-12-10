<?php
class HelpController
{
    private $view =  "HelpView.php";
    private $title = "Classy Knitt";

  	 public $advancedModel;
 	 public $basicModel;

    function __construct(){
    
      if(isset($_REQUEST["cmd"]))
        switch($_REQUEST["cmd"]){
            case "home": 
                 $this->view = "HomeView.php";
                 break;
            default: 
                 $this->view = "HelpView.php";
        }
        
        require_once( "View//".$this->view);
    }
    
}

$HelpController = new HelpController();
?>


