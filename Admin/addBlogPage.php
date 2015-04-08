<!DOCTYPE html>
<head>
	<title>Add Blog</title>
</head>
<script>
	$(document).ready(function()
	{
		$("#addButton").click(function()
		{
			//alert('add clicked');
			$.ajax({ url: "addblog.php",
					data: $("#addMenu").serialize(),
					async: true,
					type: POST
			});
		});
	});
</script>
<body>
	<form id="addMenu">
		<fieldset>
			<legend>Add Courses</legend>
			<input type="text" name="author" id="author" placeholder="Author" /><br>
			<input type="date" name="date" id="date"  placeholder="date"/><br>
			<input type="text" name="text" id="text" placeholder="Text" /><br>
			<input type="text" name="title" id="title" placeholder="Title" /><br>
						<input type="submit" id="addButton"/>
		</fieldset>
	</form>
	
</body>
