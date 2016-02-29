<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\RunningManager;
use \Manager\User_runningManager;

class RunController extends Controller
{

	/* Page createrun */
	public function createrun()
	{	
		// securise la page
		$this->allowTo('member');
		$this->show('run/createrun');
	}


	/* Page seekrun */
	public function seekrun()
	{	
		// securise la page
		$this->allowTo('member');

		$runningManager = new RunningManager;
		$allRuns = $runningManager->findAll();
		
		debug($allRuns);

		$this->show('run/seekrun', ['allRuns' => $allRuns]);
	}

	/* Page runProfile */
	public function runProfile($id)
	{	
		// securise la page
		$this->allowTo('member');
		
		$runningManager = new RunningManager();
		$run = $runningManager->findWithUser($id);

		debug($run);

		if ($run) {

			switch ($run['departure_time']) {
				case 1 : 
					$run['departure_time'] = 'entre minuit et 1h';
					break;
				case 2 :
					$run['departure_time'] = 'entre 1h et 2h';
					break;
				case 3 :
					$run['departure_time'] = 'entre 2h et 3h';
					break;
				case 4 :
					$run['departure_time'] = 'entre 3h et 4h';
					break;
				case 5 :
					$run['departure_time'] = 'entre 4h et 5h';
					break;
				case 6 :
					$run['departure_time'] = 'entre 5h et 6h';
					break;
				case 7 :
					$run['departure_time'] = 'entre 6h et 7h';
					break;
				case 8 :
					$run['departure_time'] = 'entre 7h et 8h';
					break;
				case 9 :
					$run['departure_time'] = 'entre 8h et 9h';
					break;
				case 10 :
					$run['departure_time'] = 'entre 9h et 10h';
					break;
				case 11 :
					$run['departure_time'] = 'entre 10h et 11h';
					break;
				case 12 :
					$run['departure_time'] = 'entre 11h et 12h';
					break;
				case 13 :
					$run['departure_time'] = 'entre 12h et 13h';
					break;
				case 14 :
					$run['departure_time'] = 'entre 13h et 14h';
					break;
				case 15 :
					$run['departure_time'] = 'entre 14h et 15h';
					break;
				case 16 :
					$run['departure_time'] = 'entre 15h et 16h';
					break;
				case 17 :
					$run['departure_time'] = 'entre 16h et 17h';
					break;
				case 18 :
					$run['departure_time'] = 'entre 17h et 18h';
					break;
				case 19 :
					$run['departure_time'] = 'entre 18h et 19h';
					break;
				case 20 :
					$run['departure_time'] = 'entre 19h et 20h';
					break;
				case 21 :
					$run['departure_time'] = 'entre 20h et 21h';
					break;
				case 22 :
					$run['departure_time'] = 'entre 21h et 22h';
					break;
				case 23 :
					$run['departure_time'] = 'entre 22h et 23h';
					break;
				case 24 :
					$run['departure_time'] = 'entre 23h et minuit';
					break;
			}

			$this->show('run/runProfile', ['run' => $run]);
		}
		else {
			$this->show('w_errors/404');
		}
		
	}


	/* Page joinRun */
	public function joinRun($id)
	{	
		// securise la page
		$this->allowTo('member');

		// recuperation de l user en session
		$userId = $this->getUser();
		// debug($userId);

		// test que l id envoyé en parametre correspond bien a un run existant
		$runningManager = new RunningManager();
		$run = $runningManager->find($id);

		if($run) {

			// instanciation d un objet de type User_runningManager
			$user_runningManager = new User_runningManager;

			// test que l user ne participe pas deja a la course
			$participation = $user_runningManager->findWithUserAndRun($userId['id'], $run['id']);

			if ($participation) {
				echo "Vous êtes déjà enregistré pour cette course.";
			}
			else {
				$allRuns = $user_runningManager->insert(['user_id' => $userId['id'], 'running_id' => $run['id']]);
				$this->redirectToRoute('runProfile', ['id' => $run['id']]);
			}	
		}
		else {
			$this->show('w_errors/404');
		}

	}


}