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

    /**
     * transaksi insert data ke table manapun menggunakan 
     * route api/insert dengan format
     *  {
     *      "table":"nama table",
     *      "id":"",
     *      "data":[
     *          {           
     *             "field1":"value",
     *             "field2":"value",
     *             "field3":"value"
     *          }
     *      ]
     *  }
     * untuk insert ke table manapun, sertakan nama table di key "table", sedangkan key "data" adalah nama firld table yang akan diiskan
     * jika key "id" terisi, maka prosesnya adalah update table 
     */
    $routes->post('insert', 'Api::insert');

    /**
     * transaksi data menggunakan routes API
     * select data unutk ditampilkan di datatable, halaman manapun menggunakan 
     * api/get dengan format
     * {
     *   "table":"",
     *   "field":"",
     *   "value":"",
     *   "id":""
     * }
     * tidak boleh kosong parameter 'table' diisi untuk mengambil data dari table mana, 
     * jika field terisi, hrus berserta value, ini adalah select where 'field' = 'value'
     * jika hanya table dan id yg diisi, maka ini adalah select where id = 'id'
     */
    $routes->get('get', 'Api::get');
    $routes->delete('delete', 'Api::delete');
});

$routes->group('bo', ['namespace' => 'App\Controllers\Front\BO'], static function ($routes) {
    $routes->get('dashboard', 'Kontrol::index');
    $routes->get('newticket', 'Kontrol::tiketbaru');
    $routes->get('myticket', 'Kontrol::tiketsaya');
});

$routes->group('admin', ['namespace' => 'App\Controllers\Front\Admin'], static function ($routes) {
    $routes->get('dashboard', 'Kontrol::index');
    $routes->get('viewticket', 'Kontrol::viewticket');
    $routes->get('ticketprogress', 'Kontrol::ticketprogress');
    $routes->get('ticketdetail', 'Kontrol::detail');
    $routes->get('ticketdetailprint', 'Kontrol::detailprint');
    $routes->get('ticketdone', 'Kontrol::ticketdone');
    $routes->get('rejectedticket', 'Kontrol::rejectedticket');
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
