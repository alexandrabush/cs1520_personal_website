<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>~Alex World~</title>
    <!-- Customized Bootstrap CSS -->
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
	  			<h1> Thanks of stopping by. Drop me a message before you head out! </h1>
	  		</div>
	   	</div>
      <!-- Navbar/sidebar -->
	   	<div class="row">
    		<div class="col-sm-2" style="padding-top:20px">
     			<ul class="nav nav-pills nav-stacked">
  					<li role="presentation"><a href="index.html">About Me</a></li>
					  <!--<li role="presentation"><a href="technical-work.html">Code</a></li> -->
					  <li role="presentation"><a href="art.html">Art</a></li>
					  <li role="presentation"><a href="resume.html">Resume</a></li>
					  <li role="presentation" class="active"><a href="contact.html">Contact</a></li>
				  </ul>
    		</div>
        <!-- Form for user to submit for contacting me -->
        <form class="form-horizontal" role="form" method="post" action="php/db.php">
   			<div class="col-sm-10" style="padding-top: 20px" >
      			<div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Name</span>
              <input type="text" class="form-control" name="name" placeholder="Jane Doe" aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Email</span>
              <input type="text" class="form-control" name="email" placeholder="email@example.com" aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Message</span>
              <input type="text" class="form-control" placeholder="Say hi!" aria-describedby="basic-addon1">
            </div>
            <button class="btn btn-default" id="sendMessage" name="message" type="submit"">Submit</button>
    		</div>
		  </div>
		</form>
  	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- My Javascript -->
    <script src='js/form.js'></script>
  </body>
</html>
