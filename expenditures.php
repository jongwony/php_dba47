<?php header("Content-Type: text/html; charset=UTF-8");
//print "<h2>  Oracle 47th !</h2>\n";

require(__DIR__.'/components.php');

$frame = new Frame;

print	$frame->headerNav();

print "<h1 class='header' > 지출내역 </h1>\n";

$sql = "SELECT contents, price || '원', to_char(paid_day,'MM')||'월'|| to_char(paid_day,'DD')||'일'  FROM dba47.expenditures ORDER BY 3 desc";

$array = array('내 용','지 출','날 짜');

$frame->querytab($sql, $array);

print	$frame->footer();

