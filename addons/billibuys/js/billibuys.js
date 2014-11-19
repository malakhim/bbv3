$(document).ready(function(){

	// Top nav menu items

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

	$('.submenu_item').click(function(){
		$(this).find('a').click();
	});

	$('.top_menu_item').hover(function(){
		$(this).find('a').css('color','#175A6C');
		$(this).find('ul').css('visibility','visible');
	},function(){
		// $(this).find('a').css('color','white');
		// $(this).find('ul').css('visibility','hidden');
	});

});