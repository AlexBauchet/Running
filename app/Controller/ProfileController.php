<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\ProfileManager;

class ProfileController extends Controller
{
	// /* Page View */
	// public function userPage()
	// {		
	// 	$this->show('profile/userPage');
	// }
	
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

		// echo $profile['created_at'] . '</br>';
		// echo gettype($profile['created_at']) . '</br>';

		// $date = strtotime($profile['created_at']);
		// echo '$date : ' . $date . '</br>';

		// $date = new DateTime('now');
		// echo $date->format('F Y') . '</br>';

		// $date = $profile['created_at'];
		// echo '$date : ' . $date . '</br>';

    	// $date = strtotime($date);    	
    	// echo date('F Y', strtotime($profile['created_at']));

		//echo date_format($date, 'F Y') . '</br>';
		//print_r($profile);

		$languages = explode(',', $profile['language']);

		$blablarun = 'pas du tout';
		if ($profile['blablarun'] == 1) {
			$blablarun = 'un peu';
		}
		if ($profile['blablarun'] == 2) {
			$blablarun = 'beaucoup';
		}

		$this->show('profile/view', ['profile' => $profile, 'languages' => $languages, 'blablarun' => $blablarun]);

	}


}

			
	
