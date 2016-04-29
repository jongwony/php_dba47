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

$sql = 'SELECT * FROM dba47.dba47';

$array = array('ID','이 름','연 령','전화번호','이메일','전 공');

$frame->querytab($sql, $array);

print	$frame->footer();

?>

<!--/body>
</html-->
