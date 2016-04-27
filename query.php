<?php header("Content-Type: text/html; charset=UTF-8");

require(__DIR__.'/components.php');
$frame = new Frame;
print	$frame->headernav();

print "<h1 class='header'>ER Diagram</h1>\n";

print "<div id='sqlquery'></div>\n";

print "<img src='/image/erd.png' /><br>\n";

print "<div style='width:80%;margin:auto'>";
print "<pre style='font-size:18px;'><code data-trim contenteditable> </code></pre>\n"; 
print "<button class='button' onclick='querycallback()'>Submit!</button>\n";
print "</div>";

$array = array(1,2,3,4);
$sql = 'select * from dba47.library';

?>

<script>hljs.initHighlightingOnLoad();</script>
<script>function querycallback() {
//document.getElementById("sqlquery").innerHTML = "<?php $frame->querytab($sql, $array); ?>";
}</script>

<?php
print	$frame->footer();
