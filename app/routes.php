<?php

$app->get('/', 'HomeController:index')->setName('home');
// set a say on the home page so we can redirect back to it

$app->get('/auth/signup', 'AuthController:getSignUp')->setName('auth.signup');
// get the controller & then the calls the function then sets name so we can reference it
$app->post('/auth/signup', 'AuthController:postSignUp');
// the post connections it to sign up form
// when you inspect the page you should see omething like:
// Silm-3-Authentication/public/auth/signup

$app->get('/auth/signin', 'AuthController:getSignIn')->setName('auth.signin');
$app->post('/auth/signin', 'AuthController:postSignIn');

$app->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout');