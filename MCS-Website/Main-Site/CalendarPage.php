<!DOCTYPE html>
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
	<link  href = "../css/calendar.css" type = "text/css" rel = "stylesheet">
	
	
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link rel='stylesheet' href='../fullcalendar/fullcalendar.css' />
	<script src='../fullcalendar/lib/jquery.min.js'></script>
	<script src='../fullcalendar/lib/moment.min.js'></script>
	<script src='../fullcalendar/fullcalendar.js'></script>
	
	<script type = 'text/javascript' src = '../fullcalendar/gcal.js'></script>
	
	<script type='text/javascript'>
		$(document).ready(function() {
			$('#calendar').fullCalendar({
				googleCalendarApiKey: 'AIzaSyCRKxLjqu1XVKJBvKQFYLXQn4LRK1Sd-fo',
				events: {
					googleCalendarId: 'ncaqi27ce854f583n168qcbbao@group.calendar.google.com'
				}
			});
		});
	</script>
</head>
<body>
 <!-- Fixed navbar -->
	<?php include 'navbar.php'?>
	
	<div id = 'calendar'></div>
</body>
<footer>
	<?php include 'footer.php'?>
</footer>

