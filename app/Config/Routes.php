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

// admin menu angka terakir adalah status tiket
// 1 di inputkan
// 2 dicek
// 3 diterima
// 4 dikerjakan
// 5 selesai normal
// 6 selesai dengan catatan
// 7 ditolak
$routes->group('admin/data', ['namespace' => 'App\Controllers\Front\Admin'], static function ($routes) {
    if (session()->get('role') === 'isAdmin') {
        // route ini harusnya di hit ajax request, pada $(document).ready(funtion)(){}), unutk menampilkan data tiket2 yg baru diinputkan, untuk mempopulasi datatable admin di menu "submited", status yg di hit adalah 1        
        // *** route ambil dat table menggunakan api/get *** //

        // pada menu "submited" datatable akan ada tombol mata, fungsingnya unutk mengirimkan value status setelah parameter ID tiket, ini unutk merubah status tiket dari 1 ke 2
        $routes->get('status/(:num)/(:num)', 'Data::changeStatus/$1/$2');
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
