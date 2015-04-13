<!DOCTYPE html>
<head>
	<title>Editing Table</title>
</head>
<body>
	<?php
		include 'DatabaseManager/mediaManager.php';
		include_once dirname(__FILE__).'/siteModel/media.class.php';
		
		$file = 'addLog.txt';
		$h = fopen($file, 'w');
		fwrite($h, 'addLog\n');
		
		$mediaManager = new mediaManager();
		
		$bloge;
		if (isset($_POST['title'])) {
			$bloge = new Blog($_POST['title'], $_POST['body']); //$_POST['blogDate'], $_POST['author'], 
		}
		else {
			$bloge = null;
		}
		//$author = $bloge->getAuthor();
		$title = $bloge->getTitle();
		$text = $bloge->getBody();
		$var = 'Title = ' . $title . 'body = ' . $body . '\n';
		fwrite($h, $var);
		
		$ok = $mediaManager->insertBlog($bloge);
		
		//check on the insert, did it work?
		if($ok){
			echo "Insert of blog Worked!!!";
		}
		else {
			echo "NOPE NOPE NOPE";
		}
		
		fclose($h);
	?>
</body>