<html>
    <head>
       <title><?=$this->title?></title>
       <!-- link to my css-->
		<link href="Css/style.css" rel="stylesheet" type="text/css">
		<!-- link to boostrap-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    
    <body> 
    	<!-- html using bootstrap container to shape content-->
      	<div class="container-fluid">
      	<h1> Classy Knits </h1>

        <!--Php -->       
        <?php
           
           require_once("NavigationView.php");
            
           if( isset($this->progressModel->currentProgress)) {
            	include("ProgressPages\\Progress".$this->progressModel->currentProgress.".php");
           	}
           	
           else {
               
              ?>
               <!-- PHP: The Selections - next and previous-->
              <?php }
               
            	 //The is the Page 2 Selection
            	 if(($this->progressModel->currentProgress< $this->progressModel->max) 
                   		&&
               	   ($this->progressModel->currentProgress > 1))
             	{
               ?>        
        
                <!-- HTML: The Selection for Next and Prev-->
                <div class="row">
                <div class="col-md-12">
                
                <a href="?ctr=ProgressController&cmd=prev"> Prev Progress</a>
                <a href="?ctr=ProgressController&cmd=next"> Next Progress >></a>
                
        		</div>
        		</div>
           		<?php 
           		 }
           			else if ($this->progressModel->currentProgress == $this->progressModel->max) 
                 { 
                ?>
                <div class="row">

                 <div class="col-md-12">

                  <!-- Prev Progress selection -->
                  <a href="?ctr=ProgressController&cmd=prev"> Prev Progress</a>
                  
                  <!-- Last Progress display -->
                  You are at the Last Progress page >|
         		</div>
         		</div>
          		<?php 
          		} 
          			//PHP: the minimum is the First Page
          			else if ($this->progressModel->currentProgress== $this->progressModel->min) 
 				{ 
 				?>
 					 <!-- HTML: The Selection for the First Progress Next and Prev-->
 					 <div class="row">

                     <div class="col-md-12">
                     <!-- HTML: The Prev would not be clickable as there would be no previous Progress before the first-->
               			| First Progress
                       <a href="?ctr=ProgressController&cmd=prev">&nbsp </a>
                       <!-- HTML: The Next Selectable mechanisim, this would take to Progress-->
                       <a href="?ctr=ProgressController&cmd=next"> Next Progress >> </a> 
         			</div>
         			</div>
        		 <?php 
        		 }
          ?>
 </div>
 
<!-- Bootstrap links-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>     
          
         
       
          
        
        
 


