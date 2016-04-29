<?php header("Content-Type: text/html; charset=UTF-8");

class Frame {

	public function headernav(){
		return <<< EOF
<!doctype html>
<head>
<meta charset='UTF-8'>
<title> 오라클47기 </title>
<link rel='stylesheet' href='/css/style.css' />
<link rel='stylesheet' href='/css/animate.min.css' />
<link rel="stylesheet" href="/css/zenburn.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/highlight.min.js"></script>
<script type='text/javascript' src='/js/jquery.min.js'></script>
<script type='text/javascript' src='/js/script.js'></script>
<script src='//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js'></script>
</head>
<body> 
<ul class='nav'>
<li><a href=/>Home</a></li>
<li><a href='/query.php'>Query</a></li>
<li><a href='/expenditures.php'>지출내역</a></li>
<li><a href='/hogu.php'>명예의 전당</a></li>
<li><a href='/capital.php'>공금현황</a></li>
<li><a href='/library.php'>사서</a></li>
<li style='float:right'><a href=/about.php>About</a></li>
<li style='float:right'><a href=/dba47.php>오라클 47기</a></li>
</ul>
EOF;

	}

	public function footer(){
		return "</body>\n</html>";
	}
	
	public function querytab($sql, $array){
		$conn = oci_connect('guest', 'guest', 'orcl.cruh9f1vmrkz.ap-northeast-2.rds.amazonaws.com:1521/orcl', 'AL32UTF8');
		if (!$conn) {
 			 $e = oci_error();
   			 trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);

		}

		// Prepare the statement
		$stid = oci_parse($conn, $sql);
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
		print "<thead>\n";
		
		print "<tr>";
		foreach($array as &$value) {
			print "<th>";
			print $value;
			print "</th>";
		}
		print "</tr>";			

		print "</thead>\n";
		print "<tbody>\n";		

		while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
		    print "<tr>\n";
		    foreach ($row as $item) {
		        print "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
		    }
		    print "</tr>\n";
		}

		print "</tbody>\n";
		print "</table>\n";

		oci_free_statement($stid);
		oci_close($conn);
		unset ($value);	 // break the reference with the last element
	}

}
