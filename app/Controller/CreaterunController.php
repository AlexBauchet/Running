<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\RunningManager;

class CreaterunController extends Controller
{	

	public function createrunSubmit() {

		debug($_POST);

		// Affecter une variable à chaque valeur clé de $_POST
		$address = trim(htmlentities($_POST['address']));
		$zipCode = trim(htmlentities($_POST['zipCode']));
		$city = trim(htmlentities($_POST['city']));
		$country = trim(htmlentities($_POST['country']));
		$departureDate = trim(htmlentities($_POST['departureDate']));
		$departureTime = trim(htmlentities($_POST['departureTime']));
		$distance = trim(htmlentities($_POST['distance']));
		$speed = trim(htmlentities($_POST['speed']));

		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// recuperation de l user en session pour identifier l'organisateur du run
		$userId = $this->getUser();

		// Instanciation d'un object de type RunningManager
		$runningManager = new RunningManager();

		$run = $runningManager->insert(['address' => $address, 
			'departure_date' => $departureDate,
			'departure_time' => $departureTime,
			'email' => $email,
			'homeTown' => $homeTown,
			'homeCountry' => $homeCountry,
			'description' => $description]); 

		if($run) {
			$success['message'] = "Vos modifications ont bien été enregistrées.";
		}
		else {
			$errors['message'] = "Cette adresse e-mail n'existe pas";
		}

		$this->show('profile/updateProfile', ['success' => $success, 'errors' => $errors]);
	}
	
}




