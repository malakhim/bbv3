$(document).ready(function(){
	$('.cm-cancel').click(function(){
		window.location.href = 'index.php?dispatch=billibuys.request&request_id='+$('#request_id').val();
	});

	// Delegate is the only thing that works post-ajax before JQuery 1.7
	$('td').delegate(".amount","change",function(){
		$(this).parent().parent().children().children('.checkbox').attr('checked','checked');
	});

	$('td').delegate('.product-price','change',function(){
		$(this).parent().parent().children().children('.checkbox').attr('checked','checked');		
	});
});