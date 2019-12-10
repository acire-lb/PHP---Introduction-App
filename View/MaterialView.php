<html>

<head>
<title><?=$this->title?></title>
<link href="Css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid">
	<h1> Classy Knits </h1>

	
	<?php
            require_once("NavigationView.php");
    
    ?>
	<h2>Material</h2>
	<div class="row">
	
		<div class="col-md-6">
			<img src="Image/knitting.jpg" alt="" />
		</div>
		<div class="col-md-6">
			<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. 
			Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse 
			platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam 
			purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis 
			posuere diam ut cursus. </p>
			<a href="?ctl=MaterialController&amp;cmd=Basic">Basic Tutorial</a> 
  
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<img src="Image/knitting.jpg" alt="" />
		</div>
		<div class="content content7">
			<p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. 
			Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse 
			platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam 
			purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis 
			posuere diam ut cursus. </p>
			
		</div>
		</div>
	<div class="row">
		<div class="col-md-12 colstyle">
			<form action="/action_page.php">
			<label for="title">Question title</label>
			<input id="title" name="title" type="text">
			<label for="question">question</label>
			<input id="question" name="question" type="text">
			<input type="submit" value="upload image">
			<input type="submit" value="Submit">
		</form> 		</div>
	</div>
		</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
