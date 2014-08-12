function GetURLParameter(sParam) {
    var sURLVariables = window.location.search.substring(1).split('&');
    for (var i = 0; i < sURLVariables.length; i++){
        var sParameterName = sURLVariables[i].split('=');
        if (sParameterName[0] == sParam){
            return sParameterName[1];
        }
    }
}

var redirect = GetURLParameter('place_bid_redirect');

if(redirect == 1){
	console.log(redirect);
	var bid_id = GetURLParameter('bid_id');
	document.location.href = '/vendor.php?dispatch=billibuys.place_bid&bid_id=' + bid_id;
}

$(document).ready(function(){
	$('.bb-time-remaining').each(function(){
		var date = new Date($(this).attr('expiry') * 1000);
		var expiry_date = new Date(date.getFullYear(), date.getMonth(), date.getDate());
		// $(this).countdown({until: expiry_date, compact: false, layout: '{dn}{dl} {hnn} {sep} {mnn} {sep} {snn}', description: ''});
		$(this).countdown({until:expiry_date});
	});
});

