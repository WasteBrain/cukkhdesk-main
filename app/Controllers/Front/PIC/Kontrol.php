<?php

namespace App\Controllers\Front\PIC;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index()
    {
        return view('PIC/HARDWARE/app');
    }

    public function onhold(){
        return view('PIC/HARDWARE/onholdticket');
    }
    public function inprogress(){
        return view('PIC/HARDWARE/inprogress');
    }
    public function resolved(){
        return view('PIC/HARDWARE/resolvedticket');
    }
}
