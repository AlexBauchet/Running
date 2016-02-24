<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\ProfileManager;

class UpdateProfileController extends Controller
{	

	public function updateProfile() {
		// securise la page
		$this->allowTo('member');
		
		$loggedUser = $this->getUser();
		// debug($loggedUser);

		$profileManager = new ProfileManager();

		$profile = $profileManager->findByUserId($loggedUser['id']);

		// print_r($profile);

		$this->show('profile/updateProfile', ['profile' => $profile]);
	}

	public function emailExists($email) {
		debug($email);
	}


	public function updateProfileSubmit()
	{
		// Affecter une variable à chaque valeur clé de $_POST
		$profile_picture = $_POST['profile_picture'];
		$firstname = trim(htmlentities($_POST['firstname']));
		$lastname = trim(htmlentities($_POST['lastname']));
		// $email = trim(htmlentities($_POST['email']));
		$home_town = trim(htmlentities($_POST['home_town']));
		// $home_country = trim(htmlentities($_POST['home_country']));
		$description = trim(htmlentities($_POST['description']));

		/* TODO : ajouter les autres variables */
		// $blablarun = $_POST['blablarun'];
		// $language = $_POST['language'];
		// $rate = $_POST['rate'];
		// $updated_at = $_POST['updated_at'];


		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// recuperation de l user en session
		$userId = $this->getUser();

		// Instanciation d'un object de type UserManager
		$profileManager = new ProfileManager();

		$resultUser = $profileManager->update([
			'profile_picture' => $profile_picture, 
			'firstname' => $firstname,
			'lastname' => $lastname,
			// 'email' => $email,
			'home_town' => $home_town,
			// 'home_country' => $home_country,
			'description' => $description,
			// 'blablarun' => $blablarun,
			// 'language' => $language,
			// 'rate' => $rate,
			// 'updated_at' => $updated_at
			],
			 $userId['id']); 

		if($resultUser) {
			$success['message'] = "Vos modifications ont bien été enregistrées.";
		}
		else {
			$errors['message'] = "Une erreur est survenue, merci de réessayer.";
		}

		$this->show('profile/updateProfile', ['success' => $success, 'errors' => $errors]);
	}

	
}




