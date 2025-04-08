<?php
	header( 'HTTP/1.1 303 See Other' );
	header( 'Location: /Settings' );
	// oh my god oh my god I need to document this so badly it just took me a full
	// 30 seconds to understand what this single line was doing.
	// in other words, this line takes the data posted as "ACC" which
	// will be either "on" or "off" and sets it as a cookie also called "ACC" that lasts 120 days.
	setcookie("ACC", $_POST["ACC"], time()+60*60*24*120, "/");
?>