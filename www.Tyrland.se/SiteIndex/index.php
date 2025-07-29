<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.php">
	<link rel="icon" href="/Res/icon.png">
	<title>Tyrland.se Index</title>
</head>
<body>
	<h1 class="Hidden">Tyrland.se Index</h1>
	<?php
		readfile("../nav.htm");
	?>
	<div id="ContentContainer">
		<div id="Content">
			<!--Begin content here-->
			<h2>Page index:</h2>
			<ul>
				<a href="/" class="Tl Link">Main page</a>
				<a href="/Links" class="Tl Link">Links</a>
				<a href="/About" class="Link Tl">About</a>
				<a href="/About/Blog" class="Link Tl">Blog</a>
				<a href="/TestPage" class="Link Tl">Test Page</a>
				<a href="/DungeonPlanner" class="Link Tl">DungeonPlanner</a>
			</ul>
		</div>
	</div>
</body>
</html>