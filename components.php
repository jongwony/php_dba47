<?php header("Content-Type: text/html; charset=UTF-8");

class Frame {

	public function headernav(){
		$h = "
<!doctype html>\n
<head> \n
<meta charset='UTF-8'> \n
<title> 오라클47기 </title> \n
<link rel='stylesheet' href='/css/style.css' /> \n
<link rel='stylesheet' href='/css/animate.min.css' />\n
<link rel='stylesheet' href='/css/zenburn.css' /> \n
<script type='text/javascript' src='/js/jquery.min.js'></script> \n
<script type='text/javascript' src='/js/script.js'></script> \n
</head> \n
<body> \n
<ul class='nav'> \n
<li><a href=/>Home</a></li> \n
<li><a href='/query.php'>Query</a></li> \n
<li><a href='/expenditures.php'>지출내역</a></li> \n
<li><a href='/hogu.php'>명예의 전당</a></li>\n
<li><a href='/capital.php'>공금현황</a></li>\n
<li style='float:right'><a href=/about.php>About</a></li>\n
<li style='float:right'><a href=/dba47.php>오라클 47기</a></li> \n
</ul> \n
";
		return $h;
	}

	public function footer(){
		$f = "</body>\n</html>";
		return $f;
	}

}
