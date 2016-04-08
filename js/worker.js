
onmessage = function(event) {
	importScripts('highlight.js');
	var result = self.hljs.highlightAuto(event.data);
	postMessage(result.value);
}
