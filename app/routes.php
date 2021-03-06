<?php

use App\Middleware\AuthMiddleware;
use App\Middleware\GuestMiddleware;
$app->get('/', 'HomeController:index')->setName('home');

require __DIR__ . '/routes/admin.php';

// when a user is signed in
$app->group('', function(){
	// signup routes
	$this->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup');
	$this->post('/auth/signup', 'AuthController:postSignUp');
	// signin routes
	$this->get('/auth/signin', 'AuthController:getSignIn')->setName('auth.signin');
	$this->post('/auth/signin', 'AuthController:postSignIn');
})->add(new GuestMiddleware($container));

$app->group('', function(){
	// signout
	$this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout');
	// change password
	$this->get('/auth/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change');
	$this->post('/auth/password/change', 'PasswordController:postChangePassword');
})->add(new AuthMiddleware($container));








