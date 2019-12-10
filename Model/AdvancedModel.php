<?php
//The Model is Storing the Advanced Tutorial Model in a session Variable
class AdvancedModel
{
    private $myController;
    
    public $min = 1;
    public $max = 3;
    public $currentAdvTut = 1;
    
    private function getCurrentAdvTut(){
  
         $lcResult = $this->currentAdvTut; 
         
         if( isset($_SESSION["advanced"])){
             $lcResult = intval($_SESSION["advanced"]);  
         }
        return $lcResult;
    }
    
    private function saveCurrentAdvTut($pAdvTutNumber){
        // saves the current tutorial in to SESSION
        $_SESSION["advanced"] = $pAdvTutNumber;
               
         
        // updates currentTutorial to match
        $this->currentAdvTut =  $pAdvTutNumber; 
           
    }


    function next(){
  
        
        // Gets the current tutorial as proposed Advanced Tut        
        $proposedAdvTut  = $this->getCurrentAdvTut();

        // Check and set the proposed Advanced Tut 
        if( ($proposedAdvTut + 1) <= $this->max)
         $proposedAdvTut = $proposedAdvTut + 1;

         $this->saveCurrentAdvTut( $proposedAdvTut);
    }
    
    function previous(){
           
        // Gets the current tutorial as proposed Current Tut
         $proposedAdvTut  = $this->getCurrentAdvTut();
        
        // Check and set the proposed Advanced Tut 
        if( ($proposedAdvTut - 1) >= $this->min)
        {
            $proposedAdvTut = $proposedAdvTut -1;
        }
        else
        {        
        $this->currentAdvTut = $proposedAdvTut;
        }
         $this->saveCurrentAdvTut( $proposedAdvTut);
    }

    // Runs when an instance is created
    function __construct($pMyController){
        $this->myController = $pMyController;
        $this->currentAdvTut = $this->getCurrentAdvTut();
    }

}

// This one does not start immediately, we get a Model when we need it.

?>
  