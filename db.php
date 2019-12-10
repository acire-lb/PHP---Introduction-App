<?php
    
    class DBconnection {//start of database class
        private $rs; // Procedural "handle" or "resource" to database
        private $connectRs;//variable used to connect to the database
        private $fetchResult;
        private $DBi;
       
        
        private function connectDb($pStrDatabase)
        {
            $this->connectRs = mysqli_connect("server","username","password");
            if(!$this->connectRs)
            {
                echo "Error connecting to the database server".mysqli_error($this->connectRs);
                $this->connectRs = -1;
            }
            else
                $dbRs = mysqli_select_db($this->connectRs,$pStrDatabase);
            if(! $dbRs)
            {
                echo "Error selecting the database".mysqli_error($this->connectRs); 
            }

        }
        
         //query used when inserting into database - this is used by sql varibale to submit the paramter's
        public function query($pStrSQL)
        {
        
            $this->rs = -1;
        
            $this->rs = mysqli_query($this->connectRs,$pStrSQL);
            if( !$this->rs)
            {
                echo "Error running query [$pStrSQL] ".mysqli_error($this->connectRs)."<br>";
                $this->rs = -1;
            
            }
          
        }
        
       public function getlastid()//gets the last id of the inserted details in a row, this is used for the competitionID
       {
          return mysqli_insert_id($this->connectRs);//return last id 
       }
  
         
        public function __construct($pStrDatabase)//constructor to connect to the Dastabase
        {
            $this->connectDb($pStrDatabase);  
        }
        
        public function next(){//next row in a database table
            $aRow = mysqli_fetch_assoc($this->rs);
            return $aRow;//return next row
        }
    
        
        public function free(){
            mysqli_free_result($this->rs);
        }
         
      
     //queries
       //this submits the values from the Model submit function to the database
        public function submit($SchoolName, $ClassroomName, $Email, $Phone, $QuestionID, $AnswerID)//the paramters passed from the model
	        
	     	{
	     		$SQL = "INSERT INTO `competition` (`SchoolName`, `ClassroomName`, `Email`, `Phone`, `QuestionID`, `AnswerID`) VALUES ('$SchoolName', '$ClassroomName', '$Email', '$Phone', '$QuestionID', '$AnswerID'); ";
	     		
	     		$this->query($SQL);	 //uses the query function from the DBConnection class
           
	     	}
         
         //function that gets a random question from the randomQuestion procedure in the mysql database
         public function setRandQuestion()
          {
             $SQL = "call randomQuestion();";
             $this->query($SQL);  
          }      
    
        
         
    }// end of database class
    
?>