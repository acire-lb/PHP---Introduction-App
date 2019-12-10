<?php

require_once ("C:/xampp/htdocs/WEB601_Milestone2_EricaBradley/db.php");//requires the full db file path

class CompetitionModel //Start of the CompetitionModel class
{
   public $compDB;
 
    //function for submitting the form values from the controller
     public function submit($SchoolName, $ClassroomName, $Email, $Phone, $QuestionID, $AnswerID)
    
     {
          //submits parameterss to the DConnection class
       $this->compDB->submit($SchoolName, $ClassroomName, $Email, $Phone, $QuestionID, $AnswerID);
       //stores the last in a session  
       $_SESSION['LastCompID']= $this->compDB->getlastid();
       //stores the AnswerID in a session, so that the getCorrectAnswer function can compare the ID with the correct Answer ID
       $_SESSION['AnswerID'] = $AnswerID;
    }
     
    public function getSubmission()//function for knowing what the last submission id is 
    {
         $CompID = $_SESSION['LastCompID'];    //the Last ID from the get last id method stored as a session
         $SQL = "SELECT * FROM `competition` WHERE CompetitionID = $CompID;";        //Getting the Last id form the Competition table - which is the competitionID
         $this->compDB->query($SQL);         //using the DBConnection query function
         $aRow = $this->compDB->next();      //the aRow varibale is whatever the next row is.
         return $aRow;                       
         //Returns the next row     
    }
     
  public function  getCorrectAnswer()//Function for Knowing if the User input is correct
  {
         $AnswerID = $_SESSION['AnswerID'];       //the AnaswerID from the values submitted from the User
         $SQL = "SELECT * FROM question, answer, questionanswer 
              WHERE question.QuestionID = answer.AnswerID and questionanswer.AnswerID = '$AnswerID';";
         //if the AnswerID from the user is the same as the AnswerID to the Answer in questionanswer tbale then it is Correct
         $this->compDB->query($SQL);              //using the query from the dbconnection class
         $aRow = $this->compDB->next();           //the aRow varibale is whatever the next row is
       
        return $aRow;//returns the next row
  }
     
  private function forget()
  {
      if(isset($_SESSION['AnswerID'])){
           unset ($_SESSION['AnswerID']);
      } 

  }
function __construct()//Model Construct
    {
        $this->compDB = new DBConnection("CompetitionSubmission");//connect to the web601 database
    }
     
}//end of Model class


?>

 









