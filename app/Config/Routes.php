<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login', 'Home::login');

$routes->group('api', ['namespace' => 'App\Controllers\Api'], static function ($routes) {    
    $routes->post('login', 'Api::login');
    $routes->post('insert', 'Api::insert');
    $routes->get('get', 'Api::get');
    $routes->delete('delete', 'Api::delete');
});

$routes->group('bo', ['namespace' => 'App\Controllers\Front\BO'], static function ($routes) {
    $routes->get('dashboard', 'Kontrol::index');
    $routes->get('newticket', 'Kontrol::newticket');
    $routes->get('myticket', 'Kontrol::myTicketList');
});

$routes->group('admin', ['namespace' => 'App\Controllers\Front\Admin'], static function ($routes) {
    $routes->get('dashboard', 'Kontrol::index');
    $routes->get('viewticket', 'Kontrol::viewticket');
    $routes->get('ticketprogress', 'Kontrol::ticketprogress');
    $routes->get('ticketdone', 'Kontrol::ticketdone');
    $routes->get('rejectedticket', 'Kontrol::rejectedticket');
});

$routes->group('afi', ['namespace' => 'App\Controllers\Front\AFI'], static function ($routes) {
    $routes->get('dashboard', 'Kontrol::index');
});