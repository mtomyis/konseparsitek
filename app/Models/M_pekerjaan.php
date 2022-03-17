<?php

namespace App\Models;

use CodeIgniter\Model;

class M_pekerjaan extends Model
{
    protected $table = 'pekerjaan';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'keterangan', 'gambar', 'gambar2', 'gambar3', 'tanggal_awal', 'tanggal_akhir', 'klien', 'kategori', 'lokasi'];

    //memanggil data 2 jalur versi dengan 1 method
    public function getPekerjaan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getPekerjaanHomeGambar()
    {
        return $this->orderBy('updated_at', 'desc')->limit(1)->first();
    }

    public function getPekerjaanHome()
    {
        return $this->orderBy('updated_at', 'desc')->limit(4)->find();
        // order by SupplierID desc LIMIT 4
    }

    public function getPekerjaanLain()
    {
        $kategori = 'Pengawasan Gedung';
        return $this->where('kategori', $kategori)->orderBy('id', 'desc')->limit(6)->find();
        // order by SupplierID desc LIMIT 4
    }
    
    // baru
    public function getPekerjaanProyek($detail = false, $kategori = false)
    {
        if ($detail != false) {
            return $this->where(['kategori' => $kategori, 'gambar !=' => ''])->orderBy('updated_at', 'desc')->findAll();
        }
        return $this->where(['kategori' => $kategori, 'gambar !=' => ''])->orderBy('updated_at', 'desc')->limit(6)->find();
    }
}
