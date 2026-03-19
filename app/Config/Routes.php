<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');
$routes->get('/Home/logout', 'Home::logout');

$routes->options('(:any)', 'Home::corss');

$routes->group('api', function($routes) {
    $routes->post('signIn', 'API\SignIn::verify');
    $routes->post('forgotPassword/otp', 'API\ForgotPassword::OTP');
    $routes->post('forgotPassword/resets', 'API\ForgotPassword::resets');
});