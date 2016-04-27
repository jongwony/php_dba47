<?php
	require(__DIR__.'/components.php');
	
	$frame = new Frame;
	print	$frame->headerNav();
	
	print "<h1 class='header'>잠은 죽어서 자라</h1>\n";
	print "<img src='/image/tak.jpg' style='width:30%; margin: auto;' /><br>\n";
	//print "<img src='/image/mainword.jpg' style='width:50%;margin: auto;' /> \n";
	
//	print "<div style='text-align:center;'><a href='http://band.us/#!/band/59205795'>BAND</a></div>\n";
	print "<a href='http://band.us/#!/band/59205795'><img style='width:10%' src='https://partners.band.us/img/developers/share/bandapp.png' /></a>\n";

	print	$frame->footer();
