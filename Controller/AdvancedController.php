<?php


require_once "Model/AdvancedModel.php";
require_once("Model/NavigationModel.php");

class AdvancedController
{
     public $navigationModel;
      private $title = "Classy Knitt";
     

     public $advancedModel;
     
     function __construct(){
          
          $this->advancedModel= new AdvancedModel($this);
          $this->title = "Advanced";
          $lcView = "AdvancedView.php";
          $this->navigationModel = new NavigationModel();
          
          
          if(isset($_REQUEST["cmd"]))
               
               switch($_REQUEST["cmd"]){
                    
                    case "next":
               // Next Logic  - should this be in a Model? Yes!
                 $this->advancedModel->next();
                   
                break;
                   
             case "prev":
                 // Previous Logic  - should this be in a Model? Yes!
                 $this->advancedModel->previous();
                   
                break; 
                
            default: 
                 $lcView = "AdvancedView.php";
        }
        $this->navigationModel->saveCurrentView($lcView);
        
        require_once("View//".$lcView);
     }
     
   
     
     
     
     
     
}
$AdvancedController = new AdvancedController();
?>