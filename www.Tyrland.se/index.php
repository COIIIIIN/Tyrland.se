<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.php">
	<link rel="icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAA
	AAXNSR0IArs4c6QAAAVBJREFUeJztmrENwkAMRRNEwRQwARNRIlqGoUWUTMQEMAVdqONIsSxf8pD8X5nA5efLdmLnuk4
	IUZneHjjfh4EQshaPSz+65w0l5F+QAbQAGhlAC6CRAbQAmq098H19Fr3g7rifPb/09S3lI0AG0AJoJr1AFttL2Hdvr9f
	wfm/PZykfATKAFkAzeQ+Isvb8oHVNKB8BMoAWQBOuAV7Ot36Xt+vZXiJbE8pHgAygBdC4+RLN+eftMLtmtBewnK7v0f+
	9+YK3XvkIkAG0AJrwt8FozkfXjz7HszWhfATIAFoATbgXiOb80lg90flE+QiQAbQAGvfbYOv+uzXZ+UT5CJABtAAaN39
	b99/ZXqB1r1I+AmQALYAm/AzP1oTs/gBLdj5RPgJkAC2AJj0PiNaELNmct5SPABlAC6BJ7xHyaoIlun+gdc5bykeADKA
	FCCEEyQ8lpYsmnaLllQAAAABJRU5ErkJggg==">
	<title>Tyrland.se</title>
</head>
<body>
	<h1 class="Hidden">Tyrland.se</h1>
	<?php
		readfile("nav.htm");
	?>
	<div id="Content">
		<!--Begin content here-->
		<h2>
			Welcome to Tyrland.se!
		</h2>
		<p>
			Here you can find things. Don't know which things, though.
		</p>
		<button class="Glass Button" id="PrivacyPolicyButton" onclick="TogglePrivacyPolicy()">Hide privacy policy</button>
		<div id="PrivacyPolicy">
			<p>No information is saved about you except for these things:</p>
			<ul>
				<li>
					Whether you use the accessible/basic UI style, to remember to automatically deliver the right UI style. This is stored as a cookie.
				</li>
				<li>
					(Yeah, there is only one bool saved right now...)
				</li>
			</ul>
		</div>
		<script id="btnScript">
			function TogglePrivacyPolicy(){
				var btn = document.getElementById("PrivacyPolicyButton");
				var pol = document.getElementById("PrivacyPolicy");
				pol.hidden = !pol.hidden;
				if(pol.hidden === true){
					btn.textContent = "Show privacy policy";
				}
				else{
					btn.textContent = "Hide privacy policy";
				}
			}
		</script>
		<a href="TestPage/" class="Link">
			<h3 class="Link U">
				How about a test page?
			</h3>
		</a>
	</div>
</body>
</html>