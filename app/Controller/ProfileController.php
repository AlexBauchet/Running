<?php

namespace Controller;

use \W\Controller\Controller;

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

}