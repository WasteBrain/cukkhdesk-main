<?php

namespace App\Controllers\Front\BO;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index()
    {
        return view('BO/Content/dashboard');
    }

    public function tiketbaru()
    {
        return view('BO/Content/tiketbaru');
    }

    public function tiketsaya()
    {
        return view('BO/myticket');
    }

    public function aboutUS()
    {
        return view('BO/tentang');
    }
}
