<?php

namespace App\Controllers\Front\AFI;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index(){
        return view('AFI/app');
    }
    public function onholdticket(){
        return view('AFI/onholdticket');
    }

    public function otoritizedticket(){
        return view('AFI/otoritizedticket');
    }

    public function rejectedticket(){
        return view('AFI/rejectedticket');
    }
}
