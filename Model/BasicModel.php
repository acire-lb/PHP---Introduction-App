<?php
//The Model is Storing the Basic Tutorial Number in session Variable
class BasicModel
{
    private $myController;
    
    public $min = 1;
    public $max = 3;
    public $currentBasicTut= 1;
    
    private function getCurrentBasicTut(){
  
         $lcResult = $this->currentBasicTut; 
         
         //Session is being used to retain state.
         if( isset($_SESSION["basic"])){
             $lcResult = intval($_SESSION["basic"]);  
         }
        return $lcResult;
        
        
    }
    
    private function saveCurrentBasicTut($pBTutNumber){
        // saves the current Basic Stitch Lesson in to SESSION
        $_SESSION["basic"] = $pBTutNumber;

        $this->currentBasicTut=  $pBTutNumber;           
    }


    function next(){
    
   		// Get the current Nasic tutorial as proposed BasicTut        
        $proposedBasicTut  = $this->getCurrentBasicTut();

        // Check and set the proposed Basic Tut 
        if( ($proposedBasicTut + 1) <= $this->max)
         $proposedBasicTut= $proposedBasicTut + 1;

        $this->saveCurrentBasicTut( $proposedBasicTut);
    }
    
    function previous(){
    
		// Get the current Basic Tut as proposed Basic Tut
         $proposedBasicTut= $this->getCurrentBasicTut();
        
        // Check and set the proposed Basic Tut 
        if( ($proposedBasicTut - 1) >= $this->min)
        {
            $proposedBasicTut= $proposedBasicTut -1;
        }
        else
        { 
        	$this->currentBasicTut = $proposedBasicTut;
        }
         	$this->saveCurrentBasicTut( $proposedBasicTut);
    }

    // Runs when an instance is created
    function __construct($pMyController){
        $this->myController = $pMyController;
        $this->currentBasicTut= $this->getCurrentBasicTut();
    }
}

// This one does not start immediately, we get a Model when we need it.
?>
