<!--doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>오라클47기</title>
<style>
h1 { 
	text-align:center;
}
tr:nth-child(odd) {
	background-color:#f2f2f2;
}

tr:hover {
	background-color:#333333;
	color: white;
}
table{
	border-collapse: collapse;
	width:80%;
	margin:auto;
}
th, td {
	padding: 5px;
}
th {
	background-color:#FD0000;
	color: white;
}

</style -->
<!-- css >
<link rel="stylesheet" href="/css/style.css" />
</head>
<body>
	<ul class="nav">
		<li><a href="#">Home</a></li>
		<li><a href="#">Query</a></li>
		<li><a href="#">오라클47기</a></li>
	</ul>

	<h1 class="header"> 오라클47기 </h1-->

<?php header("Content-Type: text/html; charset=UTF-8");
//print "<h2>  Oracle 47th !</h2>\n";

require(__DIR__.'/components.php');

$frame = new Frame;

print	$frame->headerNav();

print "<h1 class='header' > 오라클47기</h1>\n";

$conn = oci_connect('guest', 'guest', 'localhost/orcl', 'AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Prepare the statement
$stid = oci_parse($conn, 'SELECT * FROM dba47.dba47');
if (!$stid) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Perform the logic of the query
$r = oci_execute($stid);
if (!$r) {
    $e = oci_error($stid);
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

// Fetch the results of the query
print "<table>\n";

print "<tr><th>ID</th>
<th> 이 름 </th>
<th> 연 령</th>
<th>전화번호</th>
<th>이메일</th>
<th>전 공</th></tr>\n";

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

?>

<!--/body>
</html-->
