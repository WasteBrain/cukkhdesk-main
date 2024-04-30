<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/login', 'Home::login');
$routes->get('/logout', 'Home::logout');

$routes->group('api', ['namespace' => 'App\Controllers\Api'], static function ($routes) {
    $routes->post('login', 'Api::login');
    $routes->post('insert', 'Api::insert');
    $routes->get('get', 'Api::get');
    $routes->delete('delete', 'Api::delete');
});

$routes->group('admin', ['namespace' => 'App\Controllers\Front\Admin'], static function ($routes) {
    if (session()->get('role') === 'isAdmin') {
        $routes->get('dashboard', 'Kontrol::index');
        $routes->get('viewticket', 'Kontrol::viewticket');
        $routes->get('ticketprogress', 'Kontrol::ticketprogress');
        $routes->get('ticketdone', 'Kontrol::ticketdone');
        $routes->get('rejectedticket', 'Kontrol::rejectedticket');
    } else {
        $routes->get('(.*)', function () {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        });
    }
});

$routes->group('admin/data', ['namespace' => 'App\Controllers\Front\Admin'], static function ($routes) {
    if (session()->get('role') === 'isAdmin') {
        $routes->get('newtiket', 'Data::newTiket');
    } else {
        $routes->get('(.*)', function () {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        });
    }
});

$routes->group('pic', ['namespace' => 'App\Controllers\Front\PIC'], static function ($routes) {
    if (session()->get('role') === 'isPIC') {
        $routes->get('dashboard', 'Kontrol::index');
        $routes->get('onholdticket', 'Kontrol::onhold');
        $routes->get('inprogressticket', 'Kontrol::inprogress');
        $routes->get('resolvedticket', 'Kontrol::resolved');
    } else {
        $routes->get('(.*)', function () {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        });
    }
});

$routes->group('validators', ['namespace' => 'App\Controllers\Front\validators'], static function ($routes) {
    if (session()->get('role') === 'isVal') {
        $routes->get('dashboard', 'Kontrol::index');
        $routes->get('onholdticket', 'Kontrol::onholdticket');
        $routes->get('otoritizedticket', 'Kontrol::otoritizedticket');
        $routes->get('rejectedticket', 'Kontrol::rejectedticket');
    } else {
        $routes->get('(.*)', function () {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        });
    }
});

$routes->group('bo', ['namespace' => 'App\Controllers\Front\BO'], static function ($routes) {
    $routes->get('dashboard', 'Kontrol::index');
    $routes->get('newticket', 'Kontrol::newticket');
    $routes->get('myticket', 'Kontrol::myTicketList');
});
