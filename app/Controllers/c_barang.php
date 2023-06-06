<?php

namespace App\Controllers;

use App\Models\m_barang;
use CodeIgniter\Controller;

class c_barang extends Controller
{
    // protected $session;

    // public function __construct()
    // {
    // helper('session');
    // $this->session = session();

    // if (!session()->get('isLoggedIn')) {
    //     return redirect()->to(site_url('login'));
    // }
    // }

    public function display()
    {
        $model = new m_barang();
        $data['barang'] = $model->getBarang();
        return view('barang/v_barang', $data);
    }

    public function detail($kodeBarang)
    {
        $model = new m_barang();
        $data['barang'] = $model->getDetailM($kodeBarang);
        return view('barang/v_detail_barang', $data);
    }
}
