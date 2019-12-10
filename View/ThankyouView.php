<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Thank you for your submission</title>
     
</head>

<body>
<h2> Thank you for your Submission into the Competition</h2>

<?php //PHP
  require_once "Model/CompetitionModel.php";
  $aCompmodel = new CompetitionModel();

  $aRow = $aCompmodel->getSubmission(); //the Row Variable is getting the submission valeus from the getsubmission function 
   
  $aAnswer = $aCompmodel->getCorrectAnswer($AnswerID);//the Competition Variable is getting the Answer from the getCorrectAnswer function
  
?>

   <html>   <!--Start of HTML -- Display Form for Displaying Entered in Details--> 	
      	<h1> Competition</h1>

        <form  method="post" action="?ctr=NavigationController"><!-- use the navigation controller, then the CompetitionView will use the CompetitionController-->
         
          <!-- Display the SchoolName entered in -->
          SchoolName:   <?=$aRow["SchoolName"]?>
          <p>
           <!-- Display the ClassroomName entered in -->
          ClassroomName:    <?=$aRow["ClassroomName"]?>
          <p>
           <!-- Display the Email entered in -->
		   School Pupil email address:   <?=$aRow["Email"]?>
          <p>
           <!-- Display the Phone Number entered in -->
		   School Telephone Phone Number:   <?=$aRow["Phone"]?>
          <p>
          
          <!-- Display the Correct Competition answer entered in -->
           Your Answer is : <?=$aAnswer["Correct"]?>
             
          <p>
        <!-- Button for returning back to the main page entered in -->
             
          <input type="submit" name="cmd" value="Continue">
               <!-- button to return to the main page-->
        
        </form><!-- end of form-->

</html><!-- end of html-->


