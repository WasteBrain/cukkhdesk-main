<?php

namespace App\Controllers\Front\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index(){
        return view('Admin/Content/dashboard');
    }
    public function viewticket(){
        return view('Admin/Content/Ticket/app');
    }

    public function manualinput(){
        return view('Admin/manualinput');
    }

    public function ticketprogress(){
        return view('Admin/ticketprogress');
    }

    public function ticketdone(){
        return view('Admin/ticketdone');
    }

    public function rejectedticket(){
        return view('Admin/rejectedticket');
    }
    public function aboutUS(){
        return view('Admin/tentang');
    }
}
