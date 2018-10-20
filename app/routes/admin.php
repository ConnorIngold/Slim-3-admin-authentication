<?php


$app->group('', function(){
    $app->post('admin/example.php')->setName('admin.example');
})->add(new AuthMiddleware($container));



$app->group('', function(){
	// signout
	$this->get('/auth/signout', 'AuthController:getSignOut')->setName('auth.signout');
	// change password
	$this->get('/auth/password/change', 'PasswordController:getChangePassword')->setName('auth.password.change');
	$this->post('/auth/password/change', 'PasswordController:postChangePassword');
})->add(new AuthMiddleware($container));

// porably does work contunie from 11:50