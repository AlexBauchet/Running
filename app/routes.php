<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],

		['GET', '/register', 'Register#index', 'register'],
		['POST', '/registerUser', 'Register#registerUser', 'registerUser'],

		['GET', '/login', 'Login#index', 'login'],
		['POST', '/loginUser', 'Login#loginUser', 'loginUser'],

		['GET', '/createrun', 'Run#createrun', 'createrun'],
		['POST', '/createrunSubmit', 'createrun#createrunSubmit', 'createrunSubmit'],
		
		['GET', '/seekrun', 'Run#seekrun', 'seekrun'],

		['GET', '/profile/view/[i:id]', 'Profile#view', 'viewProfile'],
		['GET', '/profile/updateProfile', 'UpdateProfile#updateProfile', 'updateProfile'],
		['POST', '/profile/updateProfileSubmit', 'UpdateProfile#updateProfileSubmit', 'updateProfileSubmit'],

		['GET', '/profile/logout', 'Login#logout', 'logout'],

		['GET', '/cgu', 'Footer#cgu', 'cgu'],
		['GET', '/contacts', 'Footer#contactForm', 'contacts'],
		['GET', '/contactFormSubmit', 'Footer#contactFormSubmit', 'contactFormSubmit'],

	);