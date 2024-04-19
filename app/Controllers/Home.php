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
                ADMIN123!
            5) AFI
                Keuangan
                afi123!
            
            3) Risk
                Risk
                risk123!
            4) CCD
                Kredit
                kredit123!
            
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
        $session = session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($username && $password)
        {

            if ($username == 'BranchOffice' && $password=='BO123!') {                
                return redirect()->to('bo/dashboard');
            }elseif ($username == 'Admin' && $password=='ADMIN123!') {
                return redirect()->to('admin/dashboard');
            }elseif ($username == 'Keuangan' && $password=='AFI123!') {
                return redirect()->to('afi/dashboard');
            }else {
                $session->setFlashdata('msg', 'Wrong username and password');
                return $this->index();
            }
           
        } else {
            $session->setFlashdata('msg', 'Wrong username and password');
            return $this->index();
        }
     }
}
