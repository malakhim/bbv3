$(document).ready(function(){

	if($('#second-top-nav').length != 0){
		 $('#second-top-nav').css('margin-left','-' + $('#second-top-nav').offset().left + 'px');
	}

	if($('#sort').length != 0){
		$('#sort_select').live('change',function(){
			console.log(window.location);
			if(window.location.search != ''){
				if(window.location.search.indexOf('sort') > -1){

				}else{
					window.location.href = window.location.pathname + window.location.search + '&sort=' + $(this).val() + '&sort_order=' + $(this).find(':selected').data('order');
				}
			}else{
				window.location.href = window.location.pathname + '?sort=' + $(this).val() + '&sort_order=' + $(this).find(':selected').data('order');
			}
		});
	}
});