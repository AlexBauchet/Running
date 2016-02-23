<?php

namespace Controller;

use \W\Controller\Controller;

class FooterController extends Controller
{

	// Page des CGU
	public function cgu()
	{
		$this->show('footer/cgu');
	}

	// Page de contact
	public function contactForm()
	{
		$this->show('footer/contacts');
	}

	public function contactFormSubmit()
	{
		// Affecter une variable à chaque valeur clé de $_POST
		$firstname = trim(htmlentities($_POST['firstname']));
		$lastname = trim(htmlentities($_POST['lastname']));
		$email = trim(htmlentities($_POST['email']));
		$message = trim(htmlentities($_POST['message']));

		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// vérification du format de l email


		// recuperation de l user en session
		//$userId = $this->getUser();

		// Instanciation d'un object de type UserManager
		//$profileManager = new ProfileManager();

		//$resultUser = $profileManager->update(['profile_picture' => $profile_picture, 
		//	'firstname' => $firstname,
		//	'lastname' => $lastname,
		//	'email' => $email,
		//	'homeTown' => $homeTown,
		//	'homeCountry' => $homeCountry,
		//	'description' => $description], $userId['id']); 

		if($resultUser) {
			$success['message'] = "Merci, votre message a bien été envoyé.";
		}
		else {
			$errors['message'] = "Une erreur est survenue, votre message n'a pas été envoyé.";
		}

		$this->show('footer/help', ['success' => $success, 'errors' => $errors]);
	}

}