<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}

	public function privateHome() {
		// Récupére l'utilisateur connecté
		$user = $this->getUser();
		// debug($user);
		// useless à part pour envoyer $email à la vue
		$email = $user['email'];
		$this->show('default/home', ['email' => $email]);
	}

}