$(document).ready(function(){
  $('tbody').sortable();
  $(document).click(function(){
	$('pre code').each(function(i, block) {
 		hljs.highlightBlock(block);
  	});
  });
});

