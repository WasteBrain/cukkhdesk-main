<?php

namespace App\Controllers\Front\BO;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index(){
        return view('BO/app');
    }

    public function newTicket(){
        return view('BO/newticket');
    }

    public function myTicketList(){
        return view('BO/myticket');
    }

    public function aboutUS(){
        return view('BO/tentang');
    }
}
