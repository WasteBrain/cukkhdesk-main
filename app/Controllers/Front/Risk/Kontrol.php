<?php

namespace App\Controllers\Front\Risk;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index(){
        return view('Risk/app');
    }
    public function onholdticket(){
        return view('Risk/onholdticket');
    }

    public function otoritizedticket(){
        return view('Risk/otoritizedticket');
    }

    public function rejectedticket(){
        return view('Risk/rejectedticket');
    }
}
