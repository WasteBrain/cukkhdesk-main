<?php

namespace App\Controllers\Front\CCD;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index(){
        return view('CCD/app');
    }
    public function onholdticket(){
        return view('CCD/onholdticket');
    }

    public function otoritizedticket(){
        return view('CCD/otoritizedticket');
    }

    public function rejectedticket(){
        return view('CCD/rejectedticket');
    }
}
