<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\ProfileManager;

class UpdateProfileController extends Controller
{	

	public function updateProfile() {

		$loggedUser = $this->getUser();
		// debug($loggedUser);

		$profileManager = new ProfileManager();

		$profile = $profileManager->findByUserId($loggedUser['id']);

		// print_r($profile);

		$this->show('profile/updateProfile', ['profile' => $profile]);
	}


	public function updateProfileSubmit()
	{
		// Affecter une variable à chaque valeur clé de $_POST
		$profile_picture = $_POST['profilePicture'];
		$firstname = trim(htmlentities($_POST['firstname']));
		$lastname = trim(htmlentities($_POST['lastname']));
		$email = trim(htmlentities($_POST['email']));
		$homeTown = trim(htmlentities($_POST['homeTown']));
		$homeCountry = trim(htmlentities($_POST['homeCountry']));
		$description = trim(htmlentities($_POST['description']));

		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// recuperation de l user en session
		$userId = $this->getUser();

		// Instanciation d'un object de type UserManager
		$profileManager = new ProfileManager();

		$resultUser = $profileManager->update(['profile_picture' => $profile_picture, 
			'firstname' => $firstname,
			'lastname' => $lastname,
			'email' => $email,
			'homeTown' => $homeTown,
			'homeCountry' => $homeCountry,
			'description' => $description], $userId['id']); 

		if($resultUser) {
			$success['message'] = "Vos modifications ont bien été enregistrées.";
		}
		else {
			$errors['message'] = "Cette adresse e-mail n'existe pas";
		}

		$this->show('profile/updateProfile', ['success' => $success, 'errors' => $errors]);
	}

	
}




