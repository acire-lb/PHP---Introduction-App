<?php
require_once "Model/BasicModel.php";//Basic Model
require_once "Model/AdvancedModel.php";//Advanced Model
require_once "Model/NavigationModel.php";//Navigation Model
require_once "Model/ProgressModel.php";//Progress Model
require_once "Model/CompetitionModel.php";//Competition Model

class NavigationController
{
     
     private $navigationModel; // Variable for NavigationModel
     private $title = "Classy Knitt";
      
      public $basicModel;    // Variable for Basic Model
      public $advancedModel;  // Variable for AdvancedModel
	  public $progressModel;   // Variable for ProgressMdoel
      public $competitionModel;  // Variable for CompetitionMdoel
     
     function __construct(){
          
            $this->basicModel = new basicModel($this);
           //Basic Tut Model

            $this->advancedModel= new AdvancedModel($this);
			//Advanced Tut Model

          	$this->progressModel= new ProgressModel($this);
          //Progress Tut Model

            $this->navigationModel = new NavigationModel();
          //Nav Model
          
           $this->competitionModel = new CompetitionModel();
          //CompetitionModel
          $lcView = $this->navigationModel->currentView;
          
          if(isset($_REQUEST["cmd"]))
               
          switch($_REQUEST["cmd"]){
                    
               case "HomePage"://when HomePage Selcted then Home View will Show
                    $lcView = "HomeView.php";
                    break;
               case "Basic"://when Basic Selcted then Basic View will Show
                    $this->title ="BasicLesson";
                    $lcView = "BasicView.php";
                    break;
               case "AdvancedLesson"://when AdvncedLesson Selcted then AdvancedLesson View will Show
                    $this->title ="AdvancedLesson";
                    $lcView = "AdvancedView.php";
                    break;
               case "Material": //when Material Selcted then Material View will Show
                    $this->title ="Material Page";
                    $lcView = "MaterialView.php";
                    break;
               case "SignInPage": //when SignInPage Selcted then LoginPage View will Show
                    $this->title ="Login Page";
                    $lcView = "LoginView.php";
                    break;
               case "Help": //when Hekp Selcted then Help View will Show
                    $this->title ="Tips and Help Page";
                    $lcView = "HelpView.php";
                    break;
               case "ProgressMade"://when ProgressMade Selcted then Progress View will Show
                    $this->title ="Progress Page";
                    $lcView = "ProgressView.php";
                    break;
               case "CompetitionView":
                    //when CompetitionView Selcted then Competition View will Show, this will then use the compcontroller
                    $lcView = "CompetitionView.php";
            
               default:
               		$lcView = "HomeView.php";
          
          }
          $this->navigationModel->saveCurrentView($lcView);
          
           require_once("View//".$lcView);//The View that wil be required once - this will be te 
     }


}//end of NavigationController
$NavigationController = new NavigationController();
?>