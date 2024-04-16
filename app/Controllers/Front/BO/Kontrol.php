<?php

namespace App\Controllers\Front\BO;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Kontrol extends BaseController
{
    public function index()
    {
        //
        return view('BO/app');
    }
}
