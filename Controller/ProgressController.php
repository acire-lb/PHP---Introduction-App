<?php


require_once "Model/ProgressModel.php";
require_once "Model/AdvancedModel.php";
require_once "Model/BasicModel.php";
require_once("Model/NavigationModel.php");

class ProgressController
{
     public $navigationModel;
     private $title = "Learn how to Knitt";
     
	 public $advancedModel;      
     public $progressModel;
     public $basicModel;  
     
     function __construct(){
          
          //Progress Model being instasitated
          $this->progressModel = new ProgressModel($this);
          $this->advancedModel = new AdvancedModel($this);
          $this->basicModel = new BasicModel($this);


          $this->title = "Progress";
          $lcView = "ProgressView.php";
          $this->navigationModel = new NavigationModel();
          
         if(isset($_REQUEST["cmd"]))
               
               switch($_REQUEST["cmd"]){
                    
                    case "next":
                          $this->progressModel->next();
                   
                		break;
                 	case "prev":
                          $this->progressModel->previous();
                		break; 
                	case "Advanced":
                		$lcView = "AdvancedView.php";          
                         break;
                    case "Basic":
                		$lcView = "BasicView.php"; 
            	 default: 
                 $lcView = "ProgressView.php";
        		}
        		$this->navigationModel->saveCurrentView($lcView);
        
        		require_once("View//".$lcView);
     	}
     
   
     
     
     
     
     
}
$ProgressController = new ProgressController();
?>