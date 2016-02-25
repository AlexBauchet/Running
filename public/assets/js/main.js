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


	/* ----------------------------------------------
						CREATE RUN
	 ---------------------------------------------- */


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


	// geocoding du point de depart de la course
	// function initialiserGoogleMaps(latitude, longitude) {
	// 	var config = {
	// 		'center' : new google.maps.LatLng(latitude, longitude),
	// 		'zoom' : 15,
	// 		'mapTypeId' : google.maps.MapTypeId.ROADMAP
	// 	};

	// 	var mapElement = document.getElementById('map');

	// 	var map = new google.maps.Map(mapElement, config);

	// 	var marker = new google.maps.Marker( {
	// 		'position': {'lat' : latitude, 'lng' : longitude},
	// 		'map': map,
	// 		'title': 'vous êtes là!'
	// 	});
	// }

	// // vérifier que la geoloc est supportée par le navigateur (geolocalisation API):
	// if (Modernizr.geolocation) {
	// 	console.info('Géolocalisation supportée.');

	// 	// utilisation du service de géoloc founi par le navigateur
	// 	navigator.geolocation.getCurrentPosition( 
	// 		function(position) {

	// 			var messageLatitude = 'Latitude : ' + position.coords.latitude;
	// 			var messageLongitude = 'Longitude : ' + position.coords.longitude;

	// 			console.log(messageLatitude);
	// 			console.log(messageLongitude);

	// 			// affichage sur la map :
	// 			initialiserGoogleMaps(position.coords.latitude, position.coords.longitude);
	// 		}
	// 		,
	// 		function(error) {
	// 			// TODO : afficher un msg propre dans une DIV d'erreur
	// 			switch(error) {
	// 				case error.UNKNOWN_ERROR:
	// 					console.error('Erreur inconnue.');
	// 					break;
	// 				case error.PERMISSION_DENIED:
	// 					console.error('Problèmes de droits d\'accès à l\'API.');
	// 					break;				
	// 				case error.POSITION_UNAVAILABLE:
	// 					console.error('Coordonnées indisponibles');
	// 					break;	
	// 				case error.TIMEOUT:
	// 					console.error('Temps d\'attente trop élévé');
	// 					break;					
	// 			}
	// 		}
	// 	);
	// }
	// else {
	// 	console.warn('Géolocalisation non supportée. Vous ratez des fonctionnalités.');
	// }


});
