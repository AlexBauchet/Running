<?php

namespace Controller;

use \W\Controller\Controller;
use \Manager\RunningManager;

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
		$this->show('run/seekrun');
	}

	/* Page runProfile */
	public function runProfile($id)
	{	
		// securise la page
		$this->allowTo('member');
		$runningManager = new RunningManager();
		$run = $runningManager->find($id);
		if ($run) {
			$this->show('run/runProfile', ['run' => $run]);
		}
		else {
			// page erreur 404
		}
		
	}


}