$(document).ready(function() {

	console.log('OK');

	var $linkEmail = $("#iEmail");

	// Gére le sélecteur de niveau distance
	var $niveauDistance = $('#distance')
	var $niveauOutputDistance = $('#outputLevelDistance')


	// Gére le sélecteur de niveau vitesse
	var $niveauSpeed = $('#speed');
	var $niveauOutputSpeed = $('#outputLevelSpeed');

	$linkEmail.click(function() {
		alert('OK');
		$('#loginModal').modal('hide');
		$('#registerModal').modal('show');
	});


	// ------ createRun.php ------

	// $(".rng").change(function(event){
 //    	$(this).next(".val").html(this.value);
	// }); 

	
	// Gestion du changement de niveau distance
	$niveauDistance.change(function(event) {
	var nivDistance = $(this).val();
	$niveauOutputDistance.text(nivDistance);

	});
	

	// Gestion du changement de niveau vitesse
	$niveauSpeed.change(function(event) {
	var nivSpeed = $(this).val();
	$niveauOutputSpeed.text( nivSpeed );

	});


	// Distance

	// déclenchement "manuel" de l'évènement "change"
	// qui permet d'afficher la valeur du niveau
	// trigger déclenche le signal du changement
	$niveauDistance.trigger('change');

	// Speed

	// déclenchement "manuel" de l'évènement "change"
	// qui permet d'afficher la valeur du niveau
	// trigger déclenche le signal du changement
	$niveauSpeed.trigger('change');

});
