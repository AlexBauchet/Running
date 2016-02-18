<?php

namespace Controller;

use \W\Controller\Controller;

class RunController extends Controller
{

	/* Page createrun */
	public function createrun()
	{
		$this->show('run/createrun');
	}


	/* Page seekrun */
	public function seekrun()
	{
		$this->show('run/seekrun');
	}


}