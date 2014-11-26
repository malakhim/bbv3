$(document).ready(function(){

$('#bb_request_form').find('.input-text, .input-textarea').each(function(){
	if($(this).length > 0){
		var search_default_text = $(this).val();

		$(this).click(function(){
			if($(this).val() == search_default_text){
				$(this).val('');
			}
		});

		$(this).blur(function(){
			if($(this).val() == ''){
				$(this).val(search_default_text);
			}
		});
	
		// TODO: Add a function to put text back into place if focus is lost and text in field == ''
	}
});
	
});