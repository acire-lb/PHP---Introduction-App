<?php
	require_once "Model/CompetitionModel.php";//Requires the Competition Model found in the Model Folder.

class CompetitionController //Controller Class
{
     public $compModel;//Public Variable for the Competition Model
     
  	  
     //Construct of the Controller
     public function __construct() {
         
			    $this->compModel = new CompetitionModel($this);//Instantiating a CompetitionModel
				$lcView = "CompetitionView.php";//The local Varibale is the Competition View
         
        if(isset($_POST["cmd"]))//if the cmd is set
        { 
             
             switch($_POST["cmd"])
             {       
             case "win":   //when the win button is selected     
                          
                   if(isset($_POST["SchoolName"]) //if the schoolname is set
                         && isset($_POST["ClassroomName"]) //if the classroomname is set
                         && isset($_POST["Email"])         //if the email is set
                         && isset($_POST["QuestionID"])    //if the QuestionID is set
                         && isset($_POST["Phone"])         //if the Phone is set
                         && isset($_POST["AnswerID"])      //if the AnswerID is set
                    ){
                    //Setting the variables as the The Post values from the Form
                        
                         $SchoolName = $_POST["SchoolName"];          //SchoolName varibale
                         $ClassroomName = $_POST["ClassroomName"];    //ClassrooName varibale
			             $Email = $_POST["Email"];                    //Email varibale
                         $QuestionID = $_POST['QuestionID'];          //QuestionID varibale
			             $Phone = $_POST["Phone"];                    //Phone Number varibale
                         $AnswerID =  $_POST["AnswerID"];             //AnswerID varibale
               
                         //Submitting the Form Post Values to the CompetitionModel
				         $this->compModel->submit($SchoolName, $ClassroomName, $Email, $Phone, $QuestionID, $AnswerID);
                    
                         //if values are submitted then the ThankyouView will be Displayed.
                         $lcView = "ThankyouView.php";
                      }            
              }						
         }	
             require_once "View//".$lcView;	 //will require the competition view and then ThankyouVeiw when values are submitted.    
                       
     }

}//end of controller class
	
//instantiating the Competitioncontroller
$cController = new CompetitionController();
?>