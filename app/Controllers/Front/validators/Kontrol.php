<?php

namespace App\Controllers\Front\validators;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index(){
        return view('Validators/app');
    }
    public function onholdticket(){
        return view('Validators/onholdticket');
    }

    public function otoritizedticket(){
        return view('Validators/otoritizedticket');
    }

    public function rejectedticket(){
        return view('Validators/rejectedticket');
    }
}
