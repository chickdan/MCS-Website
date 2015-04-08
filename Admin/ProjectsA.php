<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

	<title>Admin Dashboard Media</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/blogger.css" rel="stylesheet">
	<link href="css/fileinput.css" rel="stylesheet">
	<?php include 'dashboard.php'; ?>
	
	<!-- ajax for asynchronous postback of adding data to the DB -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/fileinput.js" type="text/javascript"></script>
	<script>
		$(document).ready(function()
		{
			$("#addButton").click(function()
			{
				var check = $("#addMenu").serialize();
				alert(check);
				var jqhxr = $.post("addBlog.php", $("#addMenu").serialize());
				jqhxr.fail(function(jqXHR, textStatus, errorThrown){alert("Error "+jqXHR.status + '\n' + textStatus + '\n' + errorThrown);});
				
				jqhxr.done(function(data){
					alert(data);
				});
				
				/*$.ajax({ url: "/~jpolodna/MCS-Website/addBlog.php",
						data: $("#addMenu").serialize(),
						async: true,
						type: GET
				});*/
				/*check.done(function(data){
				alert('add worked'.data)});
				
				check.always(function(data){
				alert('always'.data)});
				
				check.fail(function(){
				alert('I failed')});*/
			});
		});
	</script>
  </head>
  
  <body>
	<div class="container" style = "margin-top:100px">
		<form id="addMenu">
		<div class="row">
			<div class = "form-group col-lg-7 col-lg-offset-2">
				<label for="title">Project Title</label>
				<input type = "text" class="form-control" name="title" id="title" placeholder="Enter Project Name"/>
			</div>
			</div>
			
			<div class="row">
			<div class = "form-group col-lg-3 col-lg-offset-2">
				<label for="student">Student Name</label>
				<input type = "text" class="form-control" name="author" id="author" placeholder="Enter Student's Name"/>
			</div>
			</div>
			
			<div class="row">
			<div class = "form-group col-lg-5 col-lg-offset-2">
				<label for="title">Project Images</label>
				<input id="file-0" class="file" type="file" multiple data-min-file-count="1">
				<br>
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-default">Reset</button>
				</div>
			</div>
			
			<div class="row">
			<div class = "form-group col-lg-10 col-lg-offset-2">
				<label for="text">Project Description</label>
				<textarea class = "form-control" name="text" id = "text" rows = "4" placeholder="Enter the description of the project here"></textarea>
			</div>
			</div>
			<div class="row">
			<div class="col-lg-offset-5">
					<!--<input type = "checkbox"> Check me out-->
					<button type="submit" id="addButton" class="btn btn-default">Submit</button>
			</div>
			</div>
		</form>
	</div> <!--close container-->
  </body>
  
</html>