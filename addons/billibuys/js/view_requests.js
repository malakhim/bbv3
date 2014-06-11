$(document).ready(function(){
	// var austDay = new Date();
	// austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
	// var expiry_date = new Date($('.bb-list-time-remaining').attr('expiry') * 1000);
	// console.log(expiry_date.getHours());
	$('.bb-list-time-remaining').each(function(){
		var date = new Date($(this).attr('expiry') * 1000);
		var expiry_date = new Date(date.getFullYear(), date.getMonth()- 1, date.getDate());
		// console.log(expiry_date.getFullYear() + " " + expiry_date.getMonth() + " " + expiry_date.getDate());
		$(this).countdown({until: expiry_date});
	});
});