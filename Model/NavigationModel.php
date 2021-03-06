<?php
    
// This keeps track of the current View for controllers that dont know it
class NavigationModel
{
    public $currentView = "HomeView.php"; // DefaultView
    
    
    
    private function getCurrentView(){
    // Returns current the current View number.
    // if we have session variable containing "view", 
    //  then return the value from "view".
        
         $lcResult = $this->currentView ;
        
         if(isset($_SESSION["view"])){
             $lcResult = $_SESSION["view"];
             
         }
        return $lcResult;
    }
    
    public function saveCurrentView($pViewName){
        // saves the current $pViewName in to SESSION
        $_SESSION["view"] = $pViewName;
        
        // updates currentView to match
        $this->currentView =  $pViewName;
        
    }
    //NavigationModel construct
    function __construct(){
        $this->currentView = $this->getCurrentView();
    }
}

// This one does not start immediately, we get a Model when we need it.

?>