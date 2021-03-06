<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>~Alex World~</title>
    <!-- Custumoized Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
  	<div class="container">
      <!-- My picture and large page header -->
	  	<div class="row">
	  		<div class="column-md-2">
	  			<img style="float:left;" src="./images/myface.jpg" class="img-circle" alt="Headshot" width="150" height="150">
	  		</div>
	  		<div class="column-md-9" style="padding-left: 200px; padding-top:30px">
	  		     <?php 
          			  if(!isset($_COOKIE["name"])) {
        		 ?>
	  			<h1> Hi, I'm Alex. It's nice to meet you. </h1>
	  			
	  			 <?php
          		  }
          		  else{
        		 ?>
         	   <h1>
            	  Hi, I'm Alex. Thanks for stopping by again, <?php echo $_COOKIE["name"]?>.
           	   </h1>
        	<?php
          	  }
       		 ?>
	  		</div>
	   	</div>
      <!-- Navbar and about me section-->
	   	<div class="row">
    		<div class="col-sm-2" style="padding-top:20px">
     			<ul class="nav nav-pills nav-stacked">
  					<li role="presentation" class="active"><a href="index.html">About Me</a></li>
					  <!--<li role="presentation"><a href="technical-work.html">Code</a></li>-->
					  <li role="presentation"><a href="art.html">Art</a></li>
					  <li role="presentation"><a href="resume.html">Resume</a></li>
				 	  <li role="presentation"><a href="contact.html">Contact</a></li>
				  </ul>
    		</div>
   			<div class="col-sm-10" style="padding-top: 20px" >
      			<p style="font-size:130%;"> My full name is Alexandra, but most people just call me Alex. Right now, I'm in my senior year at the University of Pittsburgh, working towards degrees in Computer Science and Philosophy. I'm also interested in visual art and design and have a minor in Studio Arts. In my free time, I love playing video games and reading books. <br> <br> If you're interested in seeing what I'm working on, check out my technical projects and art links. Or just drop by the contact page to say hi.</p>
    		</div>
		  </div>
  	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
