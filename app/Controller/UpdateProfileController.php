<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \Manager\ProfileManager;
use \DateTime;

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
		// Affecter une variable à chaque valeur clé de $_POST (sauf profile_picture)
		$firstname = trim(htmlentities($_POST['firstname']));
		$lastname = trim(htmlentities($_POST['lastname']));
		$gender = trim(htmlentities($_POST['gender']));
		$home_town = trim(htmlentities($_POST['home_town']));
		$home_country = trim(htmlentities($_POST['home_country']));
		$description = trim(htmlentities($_POST['description']));
		$blablarun = $_POST['blablarun'];
		$language = $_POST['language'];
		$time_10km = trim(htmlentities($_POST['time_10km']));
		$time_20km = trim(htmlentities($_POST['time_20km']));
		$time_half = trim(htmlentities($_POST['time_half']));
		$time_marathon = trim(htmlentities($_POST['time_marathon']));

		// Initialisation d'un tableau d'erreurs (associatif)
		$errors = [];

		// recuperation de l user en session
		$userId = $this->getUser();

		//debug($userId);
	

		// Instanciation d'un object de type UserManager
		$profileManager = new ProfileManager();

		$profile = $profileManager->findByUserId($userId['id']);
		
		// 
		$profile_picture = $profile['profile_picture'];

		// verif si un objet va etre uploadé
		if(isset($_FILES)) {
			$uploadFileName = $_FILES['profile_picture']['name'];
			$uploadFileType = $_FILES['profile_picture']['type'];
			$uploadFileSize = $_FILES['profile_picture']['size'];

			if(!strstr($uploadFileType, 'jpg')&& !strstr($uploadFileType, 'jpeg') && !strstr($uploadFileType, 'gif')) {
				$errors['profile_picture']= "ERREUR - Le fichier n'est pas une image au format web";

			}

			// Checker que le poids max est < 10000000
			elseif ($uploadFileSize > 10000000) {
				$errors['profile_picture']= "ERREUR - Le fichier dépasse le poids max";
			}

			// Déplacer l'image upload du ficher temp vers le fichier uploads
			elseif (move_uploaded_file($_FILES['profile_picture']['tmp_name'], __DIR__.'/../../uploads/'.$_FILES['profile_picture']['name'])) {
				$errors['profile_picture']= "Votre image a bien été chargé !";

				$profile_picture = $_FILES['profile_picture']['name'];
			}

			else {
				$errors['profile_picture']= "ERREUR - Votre image n'a pas été uploadé correctement";
			}
		}


		// objet datetime
		$date = new DateTime();

		// si le profil existe, on le met a jour
		if($profile) {
			$resultProfile = $profileManager->update([
				'profile_picture' => $profile_picture, 
				'firstname' => $firstname,
				'lastname' => $lastname,
				'gender' => $gender,
				'home_town' => $home_town,
				'home_country' => $home_country,
				'description' => $description,
				'blablarun' => $blablarun,
				'language' => $language,
				'time_10km' => $time_10km,
				'time_20km' => $time_20km,
				'time_half' => $time_half,
				'time_marathon' => $time_marathon,
				'updated_at' => $date->format('Y-m-d H:i:s'),
				'user_id' => $userId['id'],
				], $profile['id']); 
		}
		// si le profil n existe pas, on le crée (quand le user complete son profil pour la premiere fois)
		else {
			$resultProfile = $profileManager->insert([
				'profile_picture' => $profile_picture, 
				'firstname' => $firstname,
				'lastname' => $lastname,
				'gender' => $gender,
				'home_town' => $home_town,
				'home_country' => $home_country,
				'description' => $description,
				'blablarun' => $blablarun,
				'language' => $language,
				'time_10km' => $time_10km,
				'time_20km' => $time_20km,
				'time_half' => $time_half,
				'time_marathon' => $time_marathon,
				'created_at' => $date->format('Y-m-d H:i:s'),
				'updated_at' => $date->format('Y-m-d H:i:s'),
				'user_id' => $userId['id'],
				]); 
		}
	
		if($resultProfile) {
			$_SESSION['message'] = "Vos modifications ont bien été enregistrées.";
			// $this->redirectToRoute('viewProfile', ['id' => $resultProfile['id']]);
			$this->redirectToRoute('viewProfile', ['id' => $userId['id']]);			
		}
		else {
			$_SESSION['message'] = "Une erreur est intervenue. Vos mises à jour n'ont pas été enregistrées.";
		}

		$this->show('profile/updateProfile', ['errors' => $errors]);
		//$this->redirectToRoute('viewProfile', ['id' => $resultProfile['id'],'success' => $success, 'errors' => $errors]);

	}
	
}




