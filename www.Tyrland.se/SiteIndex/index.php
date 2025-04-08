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
		<div style="height:36pt; padding: 10pt;"></div>
		<div class="ContentFlex">
			<div class="Content">
				<!--Begin content here-->
				<ul>
					<a href="/" class="Tl Link">Main page</a>
					<a href="/Links" class="Tl Link">Links</a>
					<a href="/about" class="Link Tl">About</a>
					<a href="/about/Blog" class="Link Tl">Blog</a>
					<a href="/TestPage" class="Link Tl">Tools</a>
					<a href="/DungeonPlanner" class="Link Tl">DungeonPlanner</a>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>