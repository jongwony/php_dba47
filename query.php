<?php header("Content-Type: text/html; charset=UTF-8");

require(__DIR__.'/components.php');
$frame = new Frame;
print	$frame->headernav();

print "<h1 class='header'>ER Diagram</h1>\n";

print "<img src='/image/erd.png' /><br>\n";

print "<pre style='width:80%;margin:auto;font-size:18px;'><code class='hljs sql' data-trim contenteditable> </code></pre>\n"; 

/*
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
*/
/*
print "<script>
onmessage = function(event) {
	importScripts('/js/highlight.js');
	var result = self.hljs.highlightAuto(event.data);
	postMessage(result.value);
}
document.addEventListener('click', function() {
	var code = document.querySelector('code');
	var worker = new Worker(onmessage);
	worker.onmessage = function(event) { code.innerHTML = event.data; }
	worker.postMessage(code.textContent);
})
</script>
";
*/

print	$frame->footer();
