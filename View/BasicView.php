<html>
    <head>
        <title> <?=$this->title?> </title>
        <!-- link to my css-->
        <link rel="stylesheet" type="text/css" href="Css/Style.css">
        <!-- link to boostrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    
    <body> 
    	<!-- html container shaping content-->
      	<div class="container-fluid"><h1> Classy Knits </h1>

        <!-- php opening-->        
        <?php
           
           require_once("NavigationView.php");
            
           if( isset($this->basicModel->currentBasicTut)) {
            	include("BasicPages\\BTut".$this->basicModel->currentBasicTut.".php");
           	}
           	
           else {
               
              ?>
               <!-- PHP: The Selections - next and previous-->
              <?php }
               
            	 //The is the Page 2 Selection, so we can get to the Third Tutorial.
            	 if(($this->basicModel->currentBasicTut< $this->basicModel->max) 
                   		&&
               	   ($this->basicModel->currentBasicTut > 1))
             	{
               ?>        
        
                <!-- HTML: The Selection for Next and Prev-->
                <div class="row">
                <div class="col-md-12">

                <a href="?ctr=BasicController&cmd=prev"> Prev Tutorial</a>
                <a href="?ctr=BasicController&cmd=next"> Next Tutorial >></a>
                
        		</div>
        		</div>
           		<?php 
           		 }
           			else if ($this->basicModel->currentBasicTut== $this->basicModel->max) 
                 { 
                ?>
                
                <div class="row">
                <div class="col-md-12">
                  <!-- Prev Tutorial selection -->
                  <a href="?ctr=BasicController&cmd=prev"> Prev Tutorial</a>
                  
                  <!-- Last Tutorial display -->
                  You are at the Last Tutorial >|
         		</div>
         		</div>
          		<?php 
          		} 
          			//PHP: the minimum is the First Page
          			else if ($this->basicModel->currentBasicTut== $this->basicModel->min) 
 				{ 
 				?>
 					 <!-- HTML: The Selection for the First Tutorial Next and Prev-->
                     <div class="row">
                	 <div class="col-md-12">

                     <!-- HTML: The Prev would not be clickable as there would be no previous tutorial before the first-->
               			| First Tutorial
                       <a href="?ctr=BasicController&cmd=prev">&nbsp </a>
                       <!-- HTML: The Next Selectable mechanisim, this would take to Basic Tutorial 2-->
                       <a href="?ctr=BasicController&cmd=next"> Next Tutorial >> </a> 
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
          
         
       
          
        
        
 


