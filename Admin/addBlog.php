<!DOCTYPE html>
<head>
	<title>Editing Table</title>
</head>
<body>
	<?php
		include 'DatabaseManager/blogManager.php';
		include_once dirname(__FILE__).'/siteModel/blog.class.php';
		
		$file = 'addLog.txt';
		$h = fopen($file, 'w');
		fwrite($h, 'addLog\n');
		
		$blogManager = new blogManager();
		
		$bloge;
		if (isset($_POST['author'])) {
			$bloge = new Blog($_POST['author'], $_POST['text'], $_POST['title']); //$_POST['blogDate'],
		}
		else {
			$bloge = null;
		}
		$author = $bloge->getAuthor();
		$title = $bloge->getTitle();
		$text = $bloge->getText();
		$var = 'blog: author = ' . $author . 'text = ' . $text . 'Title = ' . $title . '\n';
		fwrite($h, $var);
		
		$ok = $blogManager->insertBlog($bloge);
		
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