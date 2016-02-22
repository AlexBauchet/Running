<?php
	
	$w_routes = array(
		['GET', '/', 'Default#home', 'home'],
		
		['GET', '/createrun', 'Run#createrun', 'createrun'],
		['GET', '/seekrun', 'Run#seekrun', 'seekrun'],

		['GET', '/register', 'Register#index', 'register'],
		['POST', '/registerUser', 'Register#registerUser', 'registerUser'],

		['GET', '/login', 'Login#index', 'login'],
		['POST', '/loginUser', 'Login#loginUser', 'loginUser'],

		['GET', '/profile/logout', 'Login#logout', 'logout'],

		['GET', '/profile/view/[i:id]', 'Profile#view', 'viewProfile'],
		['GET', '/profile/updateProfile', 'UpdateProfile#updateProfile', 'updateProfile'],
		['POST', '/profile/updateProfileSubmit', 'UpdateProfile#updateProfileSubmit', 'updateProfileSubmit'],

	);