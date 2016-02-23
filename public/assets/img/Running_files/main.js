$(document).ready(function() {

	console.log('OK');

	var $linkEmail = $("#iEmail");

	$linkEmail.click(function() {
		alert('OK');
		$('#loginModal').modal('hide');
		$('#registerModal').modal('show');
	});


	// ------ createRun.php ------

	$(".rng").click(function(){
    	$(this).next(".val").html(this.value);
	}); 


});
