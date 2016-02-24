<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\RunningManager;
use \DateTime;

class CreaterunController extends Controller
{	



	public function createrunSubmit() {

		// echo '$_POST'; debug($_POST);

		// Affecter une variable à chaque valeur clé de $_POST
		$address = trim(htmlentities($_POST['address']));
		$city = trim(htmlentities($_POST['city']));
		$country = trim(htmlentities($_POST['country']));
		$runName = trim(htmlentities($_POST['runName']));
		$description = trim(htmlentities($_POST['runDescription']));
		$departureDate = trim(htmlentities($_POST['departureDate']));
		$departureTime = trim(htmlentities($_POST['departureTime']));
		$distance = trim(htmlentities($_POST['distance']));
		$speed = trim(htmlentities($_POST['speed']));

		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// recuperation de l user en session pour identifier l'organisateur du run
		$userId = $this->getUser();

		// echo '$userId';	debug($userId);

		// check que les champs d adresse ne sont pas empty
		if(empty($address)) {
			$errors['address'] = "Merci de vérifier l'adresse.";
		}

		if(empty($city)) {
			$errors['city'] = "Merci de vérifier la ville.";
		}

		if(empty($country)) {
			$errors['country'] = "Merci de vérifier la pays.";
		}

		if(empty($runName)) {
			$errors['runName'] = "Merci de compléter le nom de la course.";
		}

		if(empty($departureDate)) {
			$errors['departureDate'] = "Merci de renseigner la date.";
		}

		if($departureTime == 0) {
			$errors['departureTime'] = "Merci de renseigner l'heure de départ.";
		}

		if($distance == 0) {
			$errors['distance'] = "Merci de renseigner la distance.";
		}		

		if($speed == 0) {
			$errors['speed'] = "Merci de renseigner la vitesse prévue.";
		}	


		// si tous les champs pour l adresse sont ok -> concatenation de l adresse pour la geocoder
		if (empty($errors)) {

			$fullAddress = $address.' '.$city.' '.$country;
		
			// recuperation dans une variable des coords envoyees par la fct geocode
			$coords = $this->geocode($fullAddress);
			
			// echo '$coords'; debug($coords);

			if(empty($coords)) {
				$errors['coords'] = "Adresse introuvable. Merci de vérifier l'adresse.";
			}

			if(empty($errors)) {

				// instanciation d'un object de type RunningManager
				$runningManager = new RunningManager();

				// objet datetime
				$date = new DateTime();

				$run = $runningManager->insert(['address' => $address, 
					'city' => $city,
					'country' => $country,
					'latitude' => $coords['lat'],
					'longitude' => $coords['lng'],
					'run_name' => $runName,
					'description' => $description,
					'departure_date' => $departureDate,
					'departure_time' => $departureTime,
					'distance' => $distance, 
					'speed' => $speed,
					'created_at' => $date->format('Y-m-d H:i:s'),
					'updated_at' => $date->format('Y-m-d H:i:s'),
					'user_id' => $userId['id'],
					]);

				// echo '$run'; debug($run);

				if($run) {
					$_SESSION['message'] = "Vos modifications ont bien été enregistrées.";

				}
				else {
					$_SESSION['message'] = "Une erreur est intervenue. La course n'a pas été enregistrée.";
				}

				$this->redirectToRoute('seekrun');
			}

		}

		else {
			$this->show('run/createrun', ['errors' => $errors]);
		}
	}


	// recuperation des coords de l adresse transmises
	private function geocode($address) {

		// URL API de googlemaps 
		// http://maps.google.com/maps/api/geocode/json?address=

		// encodage de l'adresse pour la soumettre par url (remplacer les espaces présents dans l'adresse par des %20)
		$address = urlencode($address);

		// url de l'API pour géocoder 
		$urlApi = "http://maps.google.com/maps/api/geocode/json?address=$address";

		// appel à l'api gmap decode (en GET - réponse en JSON)
		$responseJson = file_get_contents($urlApi);

		// décodage du json pour le transformer en array php associatif (-> 2ème paramètre : true)
		$responseArray = json_decode($responseJson, true);

/*		echo '<pre>';
		print_r($responseArray);
		echo '</pre>';*/

		// on prépare un tableau associatif de retour pcq on 2 infos (lat et lng à retourner alors 
		// qu'une fonction ne peut avoir qu'un seul retour)
		$result = [];

		// je teste le status de réponse de l'api -> OK  (sinon, cela signifie qu'il n'y a pas de correspondance -> 'zero résult')
		if($responseArray['status'] == 'OK') {
			$result['lat'] = $responseArray['results']['0']['geometry']['location']['lat'];
			$result['lng'] = $responseArray['results']['0']['geometry']['location']['lng'];
		}

		// tableau $result contient lat et lng de l adresse envoyee
		return $result;
	}	
	
}




