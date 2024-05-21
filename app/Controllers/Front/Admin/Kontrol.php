<?php

namespace App\Controllers\Front\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index()
    {
        return view('Admin/Content/dashboard');
    }
    public function viewticket()
    {
        return view('Admin/Content/Ticket/app');
    }

    public function ticketprogress()
    {
        return view('Admin/Content/Ticket/onprogress');
    }
    public function ticketdone()
    {
        return view('Admin/Content/Ticket/done');
    }

    public function detail()
    {
        return view('Admin/Content/Ticket/detail');
    }
    public function detailprint()
    {
        return view('Admin/Content/Ticket/detailprint');
    }



    public function rejectedticket()
    {
        return view('Admin/rejectedticket');
    }
    public function aboutUS()
    {
        return view('Admin/tentang');
    }
}
