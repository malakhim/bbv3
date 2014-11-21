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

	$('.edit-bid-price').click(function(){
		$(this).prev('.bid-price').hide();
	});

});

function highlightLastHour(periods){
	if ($.countdown.periodsToSeconds(periods) <= 3600) { 
        $(this).addClass('countdown-highlight'); 
    } 
}