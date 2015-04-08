<!DOCTYPE html>
<!--Fix log: 1. Not displaying footer-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Daniel Chick and Josef Polodna">
    <link rel="icon" href="../../favicon.ico">

    <title>Math & Computer Science</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
	
	<!-- carousel styling -->
	<link  href = "../css/carousel.css" type = "text/css" rel = "stylesheet">
	
	<link href = "../css/HomePage(Index).css" type = "text/css" rel = "stylesheet">
	
	 <!-- Fixed navbar -->
	<?php include 'navbar.php'?>
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  <div class="row">
	<div class = "container col-lg-10 col-lg-offset-1">
	
		  <!-- Carousel -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<!-- first carousel item -->
			<div class="item active">
			  <img src="../images/cool.png" alt="First slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>Student Makes Ground in Math Theory</h1>
				  <!--<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>-->
				  <p>This is some example body text which you read.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Read More</a></p>
				</div>
			  </div>
			</div>
			
			<!-- second carousel item -->
			<div class="item">
			  <img src="../images/bandw.jpg" alt="Second slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>Prepare for Tomorrow's Technology</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			  </div>
			</div>
			
			<!-- third carousel item -->
			<div class="item">
			  <img src="../images/blue.jpg" alt="Third slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>The Images of MCS</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
				</div>
			  </div>
			</div>
		  </div>
		  
		  <!-- left carousel arrow -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  
		  <!-- right carousel arrow -->
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div><!-- /.carousel -->
	</div>
	</div> <!-- end carousel row -->
	
	
	<div class = "container body-container">
		<div class = "row">
			<div class = "col-lg-4">
				<img src="../images/ONEDanielJosef.jpg" class="img-rounded" width = "350px">
			</div>
			<div class = "col-lg-4">
				<p>NEWS</p>
				<h1>Hello, First News Post!</h1>
				<p>By&nbsp;<em>Josef Polodna</em>&nbsp;&nbsp;|&nbsp; 3/2/2015</p>
				<p>This is my first news post, I do hope that you enjoy reading my marvellous piece!...(Read More)</p>
			</div>
		</div> <!-- end container row-->
	</div>

	
	<div class = "container body-container">
		<div class = "row">
			<div class = "col-lg-4">
				<img src="../images/DerpCat.jpg" class="img-rounded" height = "350px">
			</div>
			<div class = "col-lg-4">
				<p>NEWS</p>
				<h1>Hello, Second Not-so-New Post!</h1>
				<p>By&nbsp;<em>Josef Polodna</em>&nbsp;&nbsp;|&nbsp; 3/2/2015</p>
				<p>This is my second post and I do hope that you enjoy it!...(Read More)</p>
			</div>
		</div> <!-- end container row-->
	</div>
	
	
    <!-- </div> /container
	<div id="footer">
		<div class = "container" style = "color:#ffffff;">
				<p>Copyright &copy Daniel Chick & Josef Polodna<p>
		</div>
			
	</div>-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
  <footer>
	<?php include 'footer.php' ?>
  </footer>
</html>
