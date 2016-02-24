<?php

namespace Controller;

use \W\Controller\Controller;

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


}