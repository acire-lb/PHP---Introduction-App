<?php
//modle is sotring in a session vaibrale, instead of tracking we are sotirn gin seesion varibale.
class LoginModel
{
    private $myController;
    
    public $Name = "Log in Name";
    public $Email = "Email";
    public $Password = "Password";
    
    private function getCurrentName(){
  
         $lcResult = $this->Name; 
         
         if( isset($_SESSION["Name"])){
             $lcResult = intval($_SESSION["Name"]);  
         }
        return $lcResult;
    }
    
    private function saveCurrentName($pLessonNumber){
        // saves the current tutorial in to SESSION
        $_SESSION["Name"] = $pLessonNumber;
        
          //session names you want to maintain between pages.
          //either if logged in or not - true or false.
         
        // updates currentTutorial to match
        $this->Name =  $pLessonNumber; 
         //store in array as a tmep fix.
     }
  

    // Runs when an instance is created
    function __construct($pMyController){
        $this->myController = $pMyController;
        $this->Name = $this->getCurrentName();
    }

}

// This one does not start immediately, we get a Model when we need it.

?>
  