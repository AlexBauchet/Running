$(document).ready(function() {

	console.log('OK');

	var $linkEmail = $("#iEmail");

	$linkEmail.click(function() {
		alert('OK');
		$('#loginModal').modal('hide');
		$('#registerModal').modal('show');
	});

});
