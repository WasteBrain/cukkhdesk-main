<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/Login', 'Home::login');


$routes->group('api', ['namespace' => 'App\Controllers\Api'], static function ($routes) {    
    $routes->post('login', 'Api::login');
    $routes->post('insert', 'Api::insert');
    $routes->get('get', 'Api::get');
    $routes->delete('delete', 'Api::delete');
});
$routes->group('bo', ['namespace' => 'App\Controllers\Front\BO'], static function ($routes) {
    $routes->get('home', 'Kontrol::index');
});
