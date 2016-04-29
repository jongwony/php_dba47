<?php header("Content-Type: text/html; charset=UTF-8");
//print "<h2>  Oracle 47th !</h2>\n";

require(__DIR__.'/components.php');

$frame = new Frame;

print	$frame->headerNav();

print "<h1 class='header' > 명예의 전당 </h1>\n";

$array = array('이 름','지각비','호 구','재 력');
$sql = "SELECT name, late||'원', hogu||'원', wealth||'원' FROM dba47.hogulist";

$frame->querytab($sql, $array);


print	$frame->footer();

