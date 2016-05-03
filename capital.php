<?php header("Content-Type: text/html; charset=UTF-8");
//print "<h2>  Oracle 47th !</h2>\n";

require(__DIR__.'/components.php');

$frame = new Frame;

print	$frame->headerNav();

print "<h1 class='header' >공금현황</h1>\n";

$sql = "SELECT d.name, l.fine || '원',
(to_char(late_day,'MM')||'월'|| to_char(late_day,'DD')||'일')".'"date"'."
FROM dba47.late_list l, dba47.dba47 d WHERE l.id=d.id  ORDER BY".'"date" desc';

$array = array('이 름','벌 금','날 짜');

$sql2 = "select capital || '원' from dba47.capital";
$array2 = array('공 금');

$frame->querytab($sql2, $array2);

print '<br><br>';

$frame->querytab($sql, $array);

print	$frame->footer();

