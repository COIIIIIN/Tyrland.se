<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../style.php">
	<link rel="icon" href="../Res/icon.png">
	<title>Nope</title>
</head>
<body>
	<?php
		readfile("../nav.htm");
	?>
	<div id="ContentContainer">
		<div style="height:36pt; padding: 10pt;"></div>
		<div class="ContentFlex">
			<div class="Content">
				<!--Begin content here-->
				<form method="post" action="settings.php">
					<p><input type="checkbox" class="CheckBox" name="ACC">Use basic/accessible theme</p>
					<button type="submit">Apply</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>