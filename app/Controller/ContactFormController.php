<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \DateTime;

class ContactFormController extends Controller
{	

 	public function contactFormSubmit()
	{
		// Affecter une variable à chaque valeur clé de $_POST (sauf profile_picture)
		$firstname = trim(htmlentities($_POST['firstname']));
		$lastname = trim(htmlentities($_POST['lastname']));
		$email = trim(htmlentities($_POST['email']));
		$message = trim(htmlentities($_POST['message']));

		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// recuperation de l user en session
		$userId = $this->getUser();

		//debug($userId);
	

		// Instanciation d'un object de type UserManager
		$profileManager = new ProfileManager();

		$profile = $profileManager->findByUserId($userId['id']);


		// check que les champs ne sont pas empty
		if(empty($firstname)) {
			$errors['firstname'] = "Merci de renseigner votre prénom.";
		}

		if(empty($lastname)) {
			$errors['lastname'] = "Merci de renseigner votre nom.";
		}

		if(empty($email)) {
			$errors['email'] = "Merci de renseigner votre email.";
		}

		if(empty($message)) {
			$errors['message'] = "Merci de formuler votre demande.";
		}


		// si tous les champs pour l adresse sont ok -> concatenation de l adresse pour la geocoder
		if (empty($errors)) {

				// instanciation d'un object de type RunningManager
				$runningManager = new ContactManager();

				// objet datetime
				$date = new DateTime();

				$newRequest = $contactManager->insert([
					'firstname' => $firstname, 
					'lastname' => $lastname,
					'email' => $email,
					'message' => $coords['lat'],
					]);

				// echo '$newRequest'; debug($newRequest);

				if($newRequest) {
					$_SESSION['message'] = "Nous vous remercions pour votre demande. Nous reviendrons vers vous rapidement.";

				}
				else {
					$_SESSION['message'] = "Une erreur est intervenue. Votre demande n'a pas été prise en compte.";
				}

				$this->redirectToRoute('seekrun');
			}

		}

		else {
			$this->show('contacts', ['errors' => $errors]);
		}
	}

}




