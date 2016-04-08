<?php header("Content-Type: text/html; charset=UTF-8");
//print "<h2>  Oracle 47th !</h2>\n";

require(__DIR__.'/components.php');

$frame = new Frame;

print	$frame->headerNav();

print "<h1 class='header' >공금현황</h1>\n";

$conn = oci_connect('guest', 'guest', 'localhost/orcl', 'AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Prepare the statement
$stid = oci_parse($conn, "SELECT d.name, l.fine || '원',
(to_char(late_day,'MM')||'월'|| to_char(late_day,'DD')||'일')".'"date"'." 
FROM dba47.late_list l, dba47.dba47 d WHERE l.id=d.id  ORDER BY".'"date" desc');

$stid2 = oci_parse($conn, "SELECT * FROM dba47.capital");

if (!$stid) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

if (!$stid2) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Perform the logic of the query
$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($stid);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Perform the logic of the query
$s = oci_execute($stid2);
if (!$s) {
    $e = oci_error($stid2);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Fetch the results of the query
print "<table>\n";

print "<tr><th>이 름</th>
<th> 벌 금</th>
<th>날 짜</th></tr>\n";

	print "<tr>\n";
	print "<th style='background-color:#FDC0C0'> 자 본</th>";
while($row_s = oci_fetch_array($stid2, OCI_ASSOC+OCI_RETURN_NULLS)) {
	foreach($row_s as $item) {
		print "	<th style='background-color:#FDC0C0'>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;")."</th>\n";
	}
	print "<th style='background-color:#FDC0C0'></th>";
}

	print "</tr>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    print "<tr>\n";
    foreach ($row as $item) {
        print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    print "</tr>\n";
}
print "</table>\n";

oci_free_statement($stid);
oci_close($conn);

print	$frame->footer();

