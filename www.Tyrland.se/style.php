<?php
	header("content-type: text/css", false);
	readfile("style.css");
	if ($_COOKIE["ACC"]==="on")
		readfile("acc.css");
	else
		readfile("nrm.css");
?>