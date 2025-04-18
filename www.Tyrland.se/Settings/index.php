<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/style.php">
	<link rel="icon" href="/Res/icon.png">
	<title>Tyrland.se site settings</title>
</head>
<body>
	<h1 class="Hidden">Tyrland.se settings</h1>
	<?php
		readfile("../nav.htm");
	?>
	<div id="ContentContainer">
		<div class="Content">
			<!--Begin content here-->
			<form method="post" action="settings.php">
				<p><input type="checkbox" class="CheckBox" name="ACC">Use basic/accessible theme</p>
				<button type="submit" class="Glass Button">Apply</button>
			</form>
		</div>
	</div>
</body>
</html>