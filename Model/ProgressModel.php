<?php

//The Model is Storing the Progress session Variable
class ProgressModel
{
    private $myController;
    
    public $min = 1;
    public $max = 4;//there will be multiple tutorials the progress page will display progress for.
    public $currentProgress = 1;
    
    private function getCurrentProgress(){
  
         $lcResult = $this->currentProgress; 
         
         //Session is being used to retain state of the progress.
         if( isset($_SESSION["progress"])){
             $lcResult = intval($_SESSION["progress"]);  
         }
        return $lcResult;
    }
    
    private function saveCurrentProgress($pProgressNumber){
    
         //Saving the Current Progress into the session.
        $_SESSION["progress"] = $pProgressNumber;         
        // updates the currentProgress to match
        $this->currentProgress =  $pProgressNumber;                  
    }


    function next(){
       
        // Get the current progress as proposed progress       
        $proposedProgress  = $this->getCurrentProgress();

        // Check and set the proposed progress 
        if( ($proposedProgress + 1) <= $this->max)
         $proposedProgress = $proposedProgress + 1;

       // $this->currentTutorial =  $proposedTut;
        $this->saveCurrentProgress( $proposedProgress);
    }
    
    function previous(){
        // Get the current progress as proposed progress
         $proposedProgress= $this->getCurrentProgress();
        
        // Check and set the proposed progress
        if( ($proposedProgress - 1) >= $this->min)
        {
            $proposedProgress= $proposedProgress - 1;
        }
        else
        { 
        	$this->currentProgress = $proposedProgress;
        }
         	$this->saveCurrentProgress( $proposedProgress);
    }
 
    // Runs when an instance is created
    function __construct($pMyController){
        $this->myController = $pMyController;
        $this->currentProgress = $this->getCurrentProgress();
    }

}

// This one does not start immediately, we get a Model when we need it.

?>
  