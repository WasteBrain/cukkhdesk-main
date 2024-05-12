<?php

namespace App\Controllers\Front\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Adminmodel\Admin;

class Data extends BaseController
{
    public function index()
    {
        //
    }

    public function tiket($status)
    {
        $morders = new Admin();
        $data = $morders->tiketSubmited($status);

        $i = 1;
        $row = array();
        foreach ($data as $hasil) {
            $rows = array();
            $rows[] = $i++;
            $rows[] = $hasil['tiket_id'];
            $rows[] = $hasil['user_id'];
            $rows[] = $hasil['nama_pengguna'];
            $rows[] = $hasil['kantor'];
            $rows[] = $hasil['namakategori'];
            $rows[] = $hasil['tgl_buat'];
            $rows[] = $hasil['deskripsi'];
            $row[] = $rows;
        }
        echo json_encode($row);
    }

    public function changeStatus($id, $status)
    {
        $morders = new Admin();
        $hasil = $morders->changeStatus($id, $status);
        if ($hasil !== true) {
            echo json_encode("no!");
        }
    }
}
