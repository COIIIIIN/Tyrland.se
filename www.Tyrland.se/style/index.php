<?php
	if ($_COOKIE["ACC"]==="N")
		readfile("../style.css");	
	elseif ($_COOKIE["ACC"]==="Y")
		readfile("../style-acc.css");
	else
	{
		readfile("../style.css");
		setcookie("ACC","N",time()+60*60*24*120, "/")
	}
	
?>