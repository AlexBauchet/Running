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
		$profile = $profileManager->findByUserId($id);

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

		switch ($profile['time_10km']) {
				case 0 : 
					$profile['time_10km'] = 'non renseigné';
					break;
				case 1 : 
					$profile['time_10km'] = '-35min';
					break;
				case 2 : 
					$profile['time_10km'] = 'entre 35 et 40min';
					break;
				case 3 : 
					$profile['time_10km'] = 'entre 40 et 50min';
					break;
				case 4 : 
					$profile['time_10km'] = 'entre 50min et 1h';
					break;
				case 5 : 
					$profile['time_10km'] = 'entre minuit et 1h';
					break;
				case 6 : 
					$profile['time_10km'] = 'entre 1h et 1h10 min';
					break;
				case 7 : 
					$profile['time_10km'] = 'entre 1h10 et 1h20 min';
					break;
				case 8 : 
					$profile['time_10km'] = '+1h20 min';
					break;
		}

		switch ($profile['time_20km']) {
				case 0 : 
					$profile['time_20km'] = 'non renseigné';
					break;
				case 1 : 
					$profile['time_20km'] = '-1h30';
					break;
				case 2 : 
					$profile['time_20km'] = 'entre 1h30 et 1h40';
					break;
				case 3 : 
					$profile['time_20km'] = 'entre 1h40 et 1h50';
					break;
				case 4 : 
					$profile['time_20km'] = 'entre 1h50 et 2h00';
					break;
				case 5 : 
					$profile['time_20km'] = 'entre 2h00 et 2h10';
					break;
				case 6 : 
					$profile['time_20km'] = 'entre 2h10 et 2h20';
					break;
				case 7 : 
					$profile['time_20km'] = 'entre 2h20 et 2h30';
					break;
				case 8 : 
					$profile['time_20km'] = '+2h30 min';
					break;
		}

		switch ($profile['time_half']) {
				case 0 : 
					$profile['time_half'] = 'non renseigné';
					break;
				case 1 : 
					$profile['time_half'] = '-1h30';
					break;
				case 2 : 
					$profile['time_half'] = 'entre 1h30 et 1h40';
					break;
				case 3 : 
					$profile['time_half'] = 'entre 1h40 et 1h50';
					break;
				case 4 : 
					$profile['time_half'] = 'entre 1h50 et 2h00';
					break;
				case 5 : 
					$profile['time_half'] = 'entre 2h00 et 2h10';
					break;
				case 6 : 
					$profile['time_half'] = 'entre 2h10 et 2h20';
					break;
				case 7 : 
					$profile['time_half'] = 'entre 2h20 et 2h30';
					break;
				case 8 : 
					$profile['time_half'] = '+2h30 min';
					break;
		}

		switch ($profile['time_marathon']) {
				case 0 : 
					$profile['time_marathon'] = 'non renseigné';
					break;
				case 1 : 
					$profile['time_marathon'] = '-3h00';
					break;
				case 2 : 
					$profile['time_marathon'] = 'entre 3h00 et 3h20';
					break;
				case 3 : 
					$profile['time_marathon'] = 'entre 3h20 et 3h40';
					break;
				case 4 : 
					$profile['time_marathon'] = 'entre 3h40 et 4h00';
					break;
				case 5 : 
					$profile['time_marathon'] = 'entre 4h20 et 4h40';
					break;
				case 6 : 
					$profile['time_marathon'] = 'entre 4h40 et 5h00';
					break;
				case 7 : 
					$profile['time_marathon'] = 'entre 5h00 et 5h20';
					break;
				case 8 : 
					$profile['time_marathon'] = '+5h20';
					break;
		}

		$this->show('profile/view', ['profile' => $profile, 'languages' => $languages, 'blablarun' => $blablarun]);

	}


}

			
	
