<?php

require(__DIR__.'/components.php');

$frame = new Frame;

print	$frame->headernav();


print "<h1 class='header'>About</h1>\n

<div style='text-align:center'>
<hr style='width:80%'>
<h2>개발환경</h2>
<p>Language : PHP, jQuery, HTML5, CSS</p>
<p>Engine : <strong style='color:red'>Oracle</strong>, <strong style='color:green'>Nginx, </strong><strong style='color:purple'>Php-fpm</strong></p>
<hr style='width:80%'>
<br>
<div class='animated infinite tada'>
<a style='text-decoration:none;' href='https://github.com/lastone9182/php_dba47'><strong style='color:hotpink;'>CONTRIBUTE ME!</strong></a>\n
</div>
</div>
";

print	$frame->footer();
