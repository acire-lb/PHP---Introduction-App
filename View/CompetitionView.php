<?php //PHP so that functions from the Model and Database can be used to get the random Question and AnswerID's
     
      require_once("Model/CompetitionModel.php");//Require's the Competition Model
      $CompModel = new CompetitionModel();//Instantiating the Competition Model
      
      //compDB is a variable in the Model that instatiates the DBConnection class in the db.php file

      $CompModel->compDB->setRandQuestion();      //the Competition Variable is getting the Database setRandquestion function
      $FirstRow = $CompModel->compDB->next();     //The Frist row is equal to the next row in the database
      $SecondRow = $CompModel->compDB->next();    //The Second row is equal to the next row in the database, not the first row
      $ThirdRow = $CompModel->compDB->next();     //The Third row is equal to the next row in the database, after the first and second.

?>
   <!-- Html so that a Form with Questions and Competition Details can be displayed and entered in by the user-->
<html>    	
      	<h1> Competition</h1>
       
        <!-- This is a Form that allows the User to enter in their school Details and Answer a Random Question -->
       
        <form  method="post" action="?ctr=CompetitionController"> 
        <!-- using the competition Controller to Display the Correct Views, and help submit the form details -->
         
         
          ClassroomName <input type="text" name="ClassroomName" value=""><!--input for classroomname-->
               <br>     
          SchoolName <input type="text" name="SchoolName" value=""> <!--the schoolname value will be empty untial the user fills it in-->
               <br> 
          School pupil email address <input type="text" name="Email" value=""><!--empty textbox for email untial the user fills it in-->
               <br>
          School telephone number <input type="text" name="Phone" value=""><!--empty textbox for Phone Number untial the user fills it in-->
                <br>
    
         <!-- This is a Question Part of the Form that allows the User to Answer a Random Question -->
        <H2> Question: </H2> <?=$FirstRow['QuestionText'];?> <input type="Hidden" name="QuestionID" value="<?=$FirstRow['QuestionID'];?>">
               <br>
		        <input type="radio"  name="AnswerID" value="<?=$FirstRow['AnswerID'];?>"> <?=$FirstRow['AnswerText'];?> 
                <!-- the value is the AnswerID from the First Row, the Text of that Answer are Displayed on the view-->
               <br> 
        		<input type="radio"  name="AnswerID" value="<?=$SecondRow['AnswerID'];?>"> <?=$SecondRow['AnswerText'];?>
               <!-- the value is the AnswerID from the Second Row, the Text of that Answer are Displayed on the view-->
               <br>
        		<input type="radio"  name="AnswerID" value="<?=$ThirdRow['AnswerID'];?>"> <?=$ThirdRow['AnswerText'];?>
                <!-- the value is the AnswerID from the First Row, the Text of that Answer are Displayed on the view-->
               <br>
        <!-- this is the Submitt Button - to submitt the Competition Details entered in on the Form -->
        <input type="submit" name="cmd" value="win">
        
             </form><!-- end of Form-->

</html> <!-- end of HTML-->