<?php

namespace App\Controllers\Front\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index(){
        return view('Admin/app');
    }
    public function viewticket(){
        return view('Admin/submitted');
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
}
