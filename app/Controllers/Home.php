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
            3) AFI
                Keuangan
                afi123!
            4) CCD
                Kredit
                CCD123!
            
            5) Risk
                Risk
                RMD123!
            
            6) PIC
                Riyo
                ATM123!

                Abet
                hardware1
                
                Yanto
                jaringan1               

                Indra
                software1

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
            }elseif ($username == 'Admin' && $password=='ADM123!') {
                return redirect()->to('admin/dashboard');
            }elseif ($username == 'Keuangan' && $password=='AFI123!') {
                return redirect()->to('afi/dashboard');
            }elseif ($username == 'Kredit' && $password=='CCD123!') {
                return redirect()->to('ccd/dashboard');
            }elseif ($username == 'Risk' && $password=='RMD123!') {
                return redirect()->to('risk/dashboard');
            }elseif ($username == 'Riyo' && $password=='ATM123!') {
                return redirect()->to('atm/dashboard');
            }elseif ($username == 'Abet' && $password=='HDD123!') {
                return redirect()->to('hdd/dashboard');
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
