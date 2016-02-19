<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ProfileManager;

class ProfileController extends Controller
{

	/* Page userPage */
	public function userPage()
	{
		$this->show('profile/userPage');
	}

	/* Page updateProfile */
	public function updateProfile()
	{
		$this->show('profile/updateProfile');
	}

	/* Page viewProfile */
	public function view($id)
	{
		// on recupere en bdd l objet en fonction du profil id
		$profileManager = new ProfileManager();

		$profile = $profileManager->find($id);

		//print_r($profile);

		$this->show('profile/view', ['profile' => $profile]);
	}

}