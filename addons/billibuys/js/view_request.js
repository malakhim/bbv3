$(document).ready(function(){
	$('.bb-time-remaining').each(function(){
		var date = new Date($(this).attr('expiry') * 1000);
		var expiry_date = new Date(date.getFullYear(), date.getMonth(), date.getDate());
		$(this).countdown({
			until:expiry_date,
			compact: true,
			compactLabels: ['y','m','w','d','h','m','s'],
			layout: '{d<}{dn}{dl}{d>} {h<}{hn}{hl}{h>} {m<}{mn}{ml}{m>} {sn}{sl}',
			onTick: highlightLastHour,
			expiryText: '<div class="countdown-expired">Auction finished</div>',
		});
	});

	$('.edit-bid-price').click(function(e){
		var price_text = $(this).siblings('.bid-price');
		var price_input_box = $(this).siblings('.bid-price-inputbox');
		var edit_link = $(this);
		edit_link.parent().siblings('.error-message').hide();
		if(price_text.data('hidden') !== 1){
			price_input_box.val(price_text.html().replace(edit_link.data('currency'),'').trim());
			price_text.hide();
			price_input_box.show();
			price_text.data('hidden',1);
			edit_link.html(edit_link.data('save-text'));
		}else{
			var new_price = price_input_box.val();
			// Ajax call to save the price
			$.ajax({
				url: $(this).data('href'),
				type: 'POST',
				data: {'bid_id':$(this).data('id'),'price':price_input_box.val().trim()},
				success: function(response){
					var response = $.parseJSON(response);
					if(response['success']){
						price_text.html(edit_link.data('currency') + new_price); 
						price_input_box.hide();
						price_text.show();
						price_text.data('hidden',0);
						edit_link.html(edit_link.data('edit-text'));
					}else{
						edit_link.parent().siblings('.error-message').find('p').text(response['message']);
						edit_link.parent().siblings('.error-message').show();
					}
				}
			});
			// Replace the price in input box and text
			// Change to show
			// Save price_text.data('hidden') to 0
		}
		$(this).siblings('.bid-price').hide();
		$(this).siblings('.bid-price-inputbox').show();
		$(this).html('Save');
		return false;
		e.preventDefault();
	});

});

function highlightLastHour(periods){
	if ($.countdown.periodsToSeconds(periods) <= 3600) { 
        $(this).addClass('countdown-highlight'); 
    } 
}