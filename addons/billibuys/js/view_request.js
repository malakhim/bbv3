$(document).ready(function(){
	$('.bb-time-remaining').each(function(){
		var date = new Date($(this).attr('expiry') * 1000);
		var expiry_date = new Date(date.getFullYear(), date.getMonth(), date.getDate());
		// $(this).countdown({until: expiry_date, compact: false, layout: '{dn}{dl} {hnn} {sep} {mnn} {sep} {snn}', description: ''});
		$(this).countdown({until:expiry_date});
	});
});

