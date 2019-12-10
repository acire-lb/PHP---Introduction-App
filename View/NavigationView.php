
<!--Navigation  -->
<?php //PHP
     require_once "LoginView.php";//Log in View
?>
<html>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</html>
<!--Start of html-->
<nav class="navbar navbar-expand-lg navstyle">
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
          
       <li class="HomePage nav-item">
			<a class="nav-link" href="?cmd=HomePage">Home</a></li><!--Hompage-->
			<li class="Material nav-item">
			<a class="nav-link" href="?cmd=Material">Material</a></li><!--MaterialPage-->
			<li class="Basic nav-item">
			<a class="nav-link" href="?cmd=Basic&amp;BTut=<?=$this->basicModel->currentBasicTut?>"><!--BasicModel-->
			Basic Stitch</a></li>
			<li class="AdvancedLesson nav-item">
			<a class="nav-link" href="?cmd=AdvancedLesson&amp;AdTut=<?=$this->advancedModel->currentAdvTut?>"><!--AdvancedLesson-->
			Advanced Stitch</a> </li>
			<li class="Help nav-item"><a class="nav-link" href="?cmd=Help">Tips <!--HelpPage-->
			and Help</a></li>
			<li class="ProgressMade nav-item">
			<a class="nav-link" href="?cmd=ProgressMade&amp;ProgressPages=<?=$this->progressModel->currentProgress?>"><!--ProgressPage-->
			Progress</a> </li>
            <li class="CompetitionView nav-item"> <a class="nav-link" href="?ctr=CompetitionController">Competition</a></li><!--CompetitionPage-->
          
    </ul>
     </div>
</nav><!--closing of nav-->