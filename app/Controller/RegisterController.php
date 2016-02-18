<?php

namespace Controller;

use \W\Controller\Controller;
use \W\Manager\UserManager;
use \W\Security\AuthentificationManager;
use \DateTime;

class RegisterController extends Controller
{
	public function index()
	{
		$this->show('register/index');
	}

	public function registerUser() {

		// Affecter une variable à chaque valeur clé de $_POST
		$email = trim(htmlentities($_POST['email']));
		$password = trim(htmlentities($_POST['password']));
		$passwordConfirm = trim(htmlentities($_POST['passwordConfirm']));

		// Initialisation d'un tableau d'erreurs
		$errors = [];

		// Instanciation d'un object de type UserManager
		$userManager = new UserManager();
		$userManager->setTable('users'); // Bug du framework le nom de la table est mal défini

		// Check de l'email
		if(empty($email) || (filter_var($email, FILTER_VALIDATE_EMAIL)) === false) {
			$errors['email'] = "Vérifiez votre adresse e-mail.";
		}
		elseif($userManager->emailExists($email)) { // Check en bdd que l'email existe
			$errors['email'] = "Cette adresse e-mail existe déjà";
		}

		// Check du password
		if($password != $passwordConfirm) {
			$errors['password'] = "Les mots de passe ne sont pas identiques";
		}
		elseif(strlen($password) <= 6) {
			$errors['password'] = "Votre mot de passe doit faire plus de 6 caractères";
		}

		// S'il n'y pas d'erreurs
		if(empty($errors)) {
			// Crypter le mot de passe
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

			// Objet DateTime
			$date = new DateTime();

			// Enregistrement en bdd et renvoie un tableau
			$resultUser = $userManager->insert([
				'email' => $email,
				'password' => $hashedPassword,
				'role' => 'member',				
			]);

			// debug($resultUser);

			// Teste que le tableau user est rempli
			if($resultUser) {
				// Authentifier l'utilisateur car l'inscription a réussi
				$authentificationManager = new AuthentificationManager();
				$authentificationManager->logUserIn($resultUser);

				// Redirection
				$this->redirectToRoute('login');
			}

		}
		else {
			$this->show('register/index', ['errors' => $errors, 'email' => $email]);
		}

	}

}