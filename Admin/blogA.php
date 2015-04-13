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
	<?php include 'dashboard.php'; ?>
	
	<!-- ajax for asynchronous postback of adding data to the DB -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
				
				$.ajax({ url: "addBlog.php",
						data: $("#addMenu").serialize(),
						async: true,
						type: POST
				});
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
				<label for="title">Title</label>
				<input type = "text" class="form-control" name="title" id="title" placeholder="Enter Blog Title"/>
			</div>
			</div>
			
			<!--<div class="row">
			<div class = "form-group col-lg-3 col-lg-offset-2">
				<label for="author">Author</label>
				<input type = "text" class="form-control" name="author" id="author" placeholder="Enter Blog Author"/>
			</div>
			</div>-->
			
			<!--<div class="row">
			<div class = "form-group col-lg-3">
				<label for="blogDate">Post Date</label>
				<input type = "date" class="form-control" name="date" id="date" placeholder="Date"/>
			</div>
			</div>-->
			
			<div class="row">
			<div class = "form-group col-lg-10 col-lg-offset-2">
				<label for="text">Blog Text</label>
				<textarea class = "form-control" name="body" id = "body" rows = "4" placeholder="Enter the body of the blog here"></textarea>
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