<?php

namespace App\Controllers\Front\PIC\ATM;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index()
    {
        return view('PIC/ATM/app');
    }

    public function onhold(){
        return view('PIC/ATM/onholdticket');
    }
    public function inprogress(){
        return view('PIC/ATM/inprogress');
    }
    public function resolved(){
        return view('PIC/ATM/resolvedticket');
    }
}
