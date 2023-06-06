<?php

namespace App\Models;

use CodeIgniter\Model;

class m_barang extends Model
{
    protected $table      = 'barang';
    protected $primaryKey = 'kodeBarang';
    protected $returnType = 'object';

    protected $allowedFields = ['kodeBarang', 'namaBarang', 'hargaBarang', 'stokBarang', 'fileBarang'];

    public function getBarang()
    {
        $db = db_connect();
        $data= $db->query('SELECT * from barang');
        return $data->getResultObject();
    }

    public function getDetailM($kodeBarang)
    {
        $db = db_connect();
        $data= $db->query("SELECT * from barang where kodeBarang='$kodeBarang'");
        return $data->getResultObject();
    }
}
