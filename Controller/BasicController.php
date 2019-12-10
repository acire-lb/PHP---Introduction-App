<?php


require_once "Model/BasicModel.php";
require_once("Model/NavigationModel.php");

class BasicController
{
     public $navigationModel;
     private $title = "Learn how to Knitt";
     

     public $basicModel;
     
     function __construct(){
          
          $this->basicModel= new BasicModel($this);
          $this->title = "Basic Stitch";
          $lcView = "BasicView.php";
          $this->navigationModel = new NavigationModel();
          
          
          if(isset($_REQUEST["cmd"]))
               
               switch($_REQUEST["cmd"]){
                    
                    case "next":
                        $this->basicModel->next();
              			break;
                   	case "prev":
                 		$this->basicModel->previous();
                    	break;     
            		default: 
                 		$lcView = "BasicView.php";
        		}
        		
        if( isset($_REQUEST["name"]))
        {
        	$this->basicModel->saveCurrentName();
        
        }
        
        		$this->navigationModel->saveCurrentView($lcView);
        
        		require_once("View//".$lcView);
     }
     
   
     
     
     
}
$BasicController = new BasicController();
?>