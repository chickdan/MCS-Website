<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Daniel Chick and Josef Polodna">
    <link rel="icon" href="../../favicon.ico">

    <title>MCS Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
	
	<!--blog styling -->
	<link href = "../css/blog.css" type = "text/css" rel = "stylesheet">
	
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

    <!-- Fixed navbar -->
	<?php include 'navbar.php';?>
	<?php include '../DatabaseManager/dbConfig.php';?>
	<?php
		$servername = DBHOST;
		$username = DBUSER;
		$password = DBPASSWORD;
		$dbname = DBNAME;
		
		//create a connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//check connection
		if ($conn->connect_error) {
			die("Connection failed: ".$conn->connect_error);
		}
		
		$sql = "select title, body from blog"; //, blog_date
		$result = $conn->query($sql);
		
		if($result->num_rows > 0){
			//output data of each row
			while($row=$result->fetch_assoc()){

				// revised for article
				echo '<div class = "container">';
				echo '<article class = "blog-post">';
				echo '<div class="panel">';
				echo '<div class = "col-md-8">';
				echo '<h2 class="blog-title">'.$row['title'].'</h2>';
				echo '<div class="blog-post-meta">'/*.$row['blog_date']*/." by ".$row['author'].'</div>'; 
				echo '<p id="bbody">'.$row['blog_text'].'</p>';
				echo '</div>';
				echo '</article>';
				echo '</div>';
				echo '</div>';
			}
		}
		else {
			echo "0 stuff";
		}
		$conn->close();
		
	?>
	

    <!-- Bootstrap core JavaScript================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
  <?php include 'footer.php';?>
</html>
