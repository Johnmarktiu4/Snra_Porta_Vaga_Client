<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');
$routes->get('/Home/logout', 'Home::logout');

$routes->options('(:any)', 'Home::corss');
$routes->options('api/(:any)', function() {
    return service('response')
        ->setStatusCode(204)
        ->setHeader('Access-Control-Allow-Origin', 'http://localhost:3000')
        ->setHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->setHeader('Access-Control-Allow-Headers', 'Content-Type, Authorization, X-Requested-With')
        ->setHeader('Access-Control-Allow-Credentials', 'true');
});

$routes->group('api', function($routes) {
    $routes->post('signIn', 'API\SignIn::verify');
    $routes->post('forgotPassword/otp', 'API\ForgotPassword::OTP');
    $routes->post('forgotPassword/resets', 'API\ForgotPassword::resets');
    $routes->post('deceased/register', 'API\Deceased::register');
    $routes->get('deceased/all', 'API\Deceased::getAll');
    $routes->get('deceased/payment/(:num)', 'API\Deceased::payment/$1');
    $routes->get('deceased/obituary/(:num)', 'API\Deceased::obituary/$1');
    $routes->get('cms/intro/content', 'API\CmsIntro::content');
    $routes->get('cms/intro/image', 'API\CmsIntro::image');
    $routes->get('cms/intro/socials', 'API\CmsIntro::socials');
    $routes->post('cms/intro/content/update/(:num)', 'API\CmsIntro::updateContent/$1');
    $routes->post('cms/intro/image/update/(:num)', 'API\CmsIntro::updateImage/$1');
    $routes->post('cms/intro/socials/update/(:num)', 'API\CmsIntro::updateSocials/$1');
    $routes->get('cms/about/content', 'API\CmsAbout::content');
    $routes->get('cms/about/mission-vision', 'API\CmsAbout::missionVision');
    $routes->get('cms/about/image', 'API\CmsAbout::image');
    $routes->post('cms/about/content/update/(:num)', 'API\CmsAbout::updateContent/$1');
    $routes->post('cms/about/mission-vision/update/(:num)', 'API\CmsAbout::updateMissionVision/$1');
    $routes->post('cms/about/image/update/(:num)', 'API\CmsAbout::updateImage/$1');
});