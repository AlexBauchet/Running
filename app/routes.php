<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		
		['GET', '/createrun', 'Run#createrun', 'createrun'],
		['GET', '/seekrun', 'Run#seekrun', 'seekrun'],
		['GET', '/userPage', 'Profile#userPage', 'userPage'],

		['GET', '/register', 'Register#index', 'register'],
		['POST', '/registerUser', 'Register#registerUser', 'registerUser'],

		['GET', '/login', 'Login#index', 'login'],
		['POST', '/loginUser', 'Login#loginUser', 'loginUser'],
		['GET', '/logout', 'Login#logout', 'logout'],

			
	);