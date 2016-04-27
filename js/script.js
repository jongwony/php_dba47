$(document).ready(function(){
  $('tbody').sortable();

  $('code').addClass('hljs sql');

  $('pre code').each(function(i, block) {
	hljs.highlightBlock(block);
  });
});
