<?php
	require(__DIR__.'/components.php');

	$frame = new Frame;
	print $frame->headerNav();
		
	print "<h1 class='header'>사서</h1>";
	
	$array = array("ID", "도서", "대출일자", "반납일자");
	$sql = 'select * from dba47.library';

	$frame->querytab($sql, $array);
	

	print $frame->footer();
