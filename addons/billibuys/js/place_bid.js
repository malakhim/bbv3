$(document).ready(function(){
	$('.cm-cancel').click(function(){
		window.location.href = 'index.php?dispatch=billibuys.request&request_id='+$('#request_id').val();
	});

	$('.amount').click(function(){
		console.log("test1");
	});
	$('.amount').bind("change",function(){
		console.log("test");
		console.log($(this).parent());
		$(this).parent().parent().children().children('.checkbox').attr('checked','checked');
	});
});