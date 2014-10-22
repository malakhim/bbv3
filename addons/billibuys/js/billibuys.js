$(document).ready(function(){

	if($('#second-top-nav').length != 0){
		 $('#second-top-nav').css('margin-left','-' + $('#second-top-nav').offset().left + 'px');
	}

	if($('#input-search').length > 0){
		var search_default_text = $('#input-search').val();

		$('#input-search').click(function(){
			if($(this).val() == search_default_text){
				$(this).val('');
			}
		});

		$('#input-search').blur(function(){
			if($(this).val() == ''){
				$(this).val(search_default_text);
			}
		});


		// TODO: Add a function to put text back into place if focus is lost and text in field == ''
	}
});