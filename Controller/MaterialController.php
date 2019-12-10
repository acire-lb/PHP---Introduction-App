<?php
require_once "Model/BasicModel.php";
require_once "Model/AdvancedModel.php";

class MaterialController
{
    private $view =  "MaterialView.php";
    //private $title = "Classy Knitt";
	private $name = "name";
 
  public $navigationModel;
     //private $title = "Learn how to Knitt";
     

     public $materialModel;
  function __construct(){
          
          //Progress Model being instasitated
          $this->advancedModel = new AdvancedModel($this);
          $this->basicModel = new BasicModel($this);


          $this->title = "Progress";
          $lcView = "ProgressView.php";
          $this->navigationModel = new NavigationModel();
           //$this->navigationModel = new NavigationModel();
         if(isset($_REQUEST["cmd"]))
               
               switch($_REQUEST["cmd"]){
                    
                    case "next":
                          $this->progressModel->next();
                          break;
                 	case "prev":
                          $this->progressModel->previous();
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

$MaterialController = new MaterialController();
?>