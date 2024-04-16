<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Login/app');
    }
    
    public function login()
    {
        /*
            1) BO
                BranchOffice
                BO123!
            2) Admin IT
                Admin
                admin123!
            3) Risk
                Risk
                risk123!
            4) CCD
                Kredit
                kredit123!
            5) AFI
                Keuangan
                afi123!
            6) PIC
                Yanto
                jaringan1

                Abet
                hardware1

                Indra
                software1

                Riyo
                atm123!

                Atot
                kkd123!

        */
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username && $password)
        {

            if ($username == 'BranchOffice' && $password=='BO123!') {
                session()->set('username', $username);
                session()->set('password', $password);
                return redirect()->to(base_url('bo/home'));
            }else {
                session()->setFlashdata('gagal', 'Username / Password salah');
                return redirect()->to(base_url('login'));
             }

           
        } else {
           session()->setFlashdata('gagal', 'Username / Password salah');
           return redirect()->to(base_url('login'));
        }
     }
}
