<?php

namespace App\Controllers;

use App\Models\M_carousel;
use App\Models\M_pekerjaan;

class C_proyek extends BaseController
{
    public function __construct()
    {
        helper(array('form', 'uri'));
        $this->M_carousel = new M_carousel();
        $this->M_pekerjaan = new M_pekerjaan();
    }

    // milik karosel
    public function carousel()
    {
        $data['data'] = $this->M_carousel->getCarousel(false, 'proyek');

        // dd($data);
        return view('admin/proyek/carousel/v_index', $data);
    }
    public function carousel_create()
    {
        $data['halaman'] = "proyek";
        $data['validation'] = \Config\Services::validation();

        return view('admin/proyek/carousel/v_create', $data);
    }
    public function carousel_edit($id)
    {
        $data['data'] = $this->M_carousel->getCarousel($id, 'proyek');
        $data['validation'] = \Config\Services::validation();
        // dd($data);
        return view('admin/proyek/carousel/v_edit', $data);
    }
    public function carousel_save()
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar, 2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Silahkan pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar melebihi batas yaitu 2 MB',
                    'is_image' => 'File yang dipilih bukan gambar',
                    'mime_in' => 'File yang dipilih bukan gambar'
                ]
            ]
        ])) {
            return redirect()->to(base_url('/proyek_carousel/create'))->withInput();
        }
        // ambil request gambar
        $fileGambar = $this->request->getFile('gambar');
        //generate nama
        $namaGambar = $fileGambar->getRandomName();
        // pindahkan ke folder images  di public
        $fileGambar->move('images', $namaGambar);
        // ambil nama sampul
        // $namaGambar = $fileGambar->getName();
        $this->M_carousel->save([
            'judul' => $this->request->getVar('judul'),
            'keterangan' => $this->request->getVar('keterangan'),
            'gambar' => $namaGambar,
            'video' => $this->request->getVar('video'),
            'halaman' => 'proyek'
        ]);
        session()->setFlashdata('pesan', 'Data berhasil di simpan');
        return redirect()->to(base_url('/proyek_carousel'));
    }
    public function carousel_saveedit($id)
    {
        if (empty($_FILES['gambar']['name'])) {
            $this->M_carousel->save([
                'id' => $id,
                'judul' => $this->request->getVar('judul'),
                'keterangan' => $this->request->getVar('keterangan'),
                'video' => $this->request->getVar('video'),
                'halaman' => 'proyek'
            ]);
        } else {
            // dd($this->request->getVar());
            if (!$this->validate([
                'gambar' => [
                    'rules' => 'uploaded[gambar]|max_size[gambar, 2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih gambar terlebih dahulu',
                        'max_size' => 'Ukuran gambar melebihi batas yaitu 2 MB',
                        'is_image' => 'File yang dipilih bukan gambar',
                        'mime_in' => 'File yang dipilih bukan gambar'
                    ]
                ]
            ])) {
                return redirect()->to(base_url('/proyek_carousel/edit/' . $this->request->getVar('id')))->withInput();
            }
            // ambil request gambar
            $fileGambar = $this->request->getFile('gambar');
            //generate nama
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan ke folder images  di public
            $fileGambar->move('images', $namaGambar);
            // ambil nama sampul
            // $namaGambar = $fileGambar->getName();
            $this->M_carousel->save([
                'id' => $id,
                'judul' => $this->request->getVar('judul'),
                'keterangan' => $this->request->getVar('keterangan'),
                'gambar' => $namaGambar,
                'video' => $this->request->getVar('video'),
                'halaman' => 'proyek'
            ]);
        }
        session()->setFlashdata('pesan', 'Data berhasil di ubah');
        return redirect()->to(base_url('/proyek_carousel'));
    }
    public function carousel_delete($id)
    {
        $this->M_carousel->delete($id);
        return redirect()->to(base_url('/proyek_carousel'));
    }
    // milik karosel

    // milik pekerjaan
    public function pekerjaan()
    {
        $data['data'] = $this->M_pekerjaan->getPekerjaan();
        // dd($data);
        return view('admin/proyek/pekerjaan/v_index', $data);
    }
    public function pekerjaan_create()
    {
        $data['validation'] = \Config\Services::validation();
        return view('admin/proyek/pekerjaan/v_create', $data);
    }
    public function pekerjaan_edit($id)
    {
        $data['data'] = $this->M_pekerjaan->getPekerjaan($id);
        $data['validation'] = \Config\Services::validation();
        // dd($data);
        return view('admin/proyek/pekerjaan/v_edit', $data);
    }
    public function pekerjaan_save()
    {
        // dd($this->request->getVar());
        if (!$this->validate([
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar, 2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Silahkan pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar melebihi batas yaitu 2 MB',
                    'is_image' => 'File yang dipilih bukan gambar',
                    'mime_in' => 'File yang dipilih bukan gambar'
                ]
            ],
            'gambar2' => [
                'rules' => 'uploaded[gambar2]|max_size[gambar2, 2048]|is_image[gambar2]|mime_in[gambar2,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Silahkan pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar melebihi batas yaitu 2 MB',
                    'is_image' => 'File yang dipilih bukan gambar',
                    'mime_in' => 'File yang dipilih bukan gambar'
                ]
            ],
            'gambar3' => [
                'rules' => 'uploaded[gambar3]|max_size[gambar3, 2048]|is_image[gambar3]|mime_in[gambar3,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Silahkan pilih gambar terlebih dahulu',
                    'max_size' => 'Ukuran gambar melebihi batas yaitu 2 MB',
                    'is_image' => 'File yang dipilih bukan gambar',
                    'mime_in' => 'File yang dipilih bukan gambar'
                ]
            ],
        ])) {
            return redirect()->to(base_url('/proyek_pekerjaan/create'))->withInput();
        }
        // ambil request gambar
        $fileGambar = $this->request->getFile('gambar');
        //generate nama
        $namaGambar = $fileGambar->getRandomName();
        // pindahkan ke folder images  di public
        $fileGambar->move('images', $namaGambar);
        // ambil nama sampul

        // gambar2
        $fileGambar2 = $this->request->getFile('gambar2');
        $namaGambar2 = $fileGambar2->getRandomName();
        $fileGambar2->move('images', $namaGambar2);

        // gambar3
        $fileGambar3 = $this->request->getFile('gambar3');
        $namaGambar3 = $fileGambar3->getRandomName();
        $fileGambar3->move('images', $namaGambar3);

        $this->M_pekerjaan->save([
            'judul' => $this->request->getVar('judul'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kategori' => $this->request->getVar('kategori'),
            'klien' => $this->request->getVar('klien'),
            'tanggal_awal' => $this->request->getVar('tanggal_awal'),
            'tanggal_akhir' => $this->request->getVar('tanggal_akhir'),
            'keterangan' => $this->request->getVar('keterangan'),
            'gambar' => $namaGambar,
            'gambar2' => $namaGambar2,
            'gambar3' => $namaGambar3,
        ]);
        session()->setFlashdata('pesan', 'Data berhasil di simpan');
        return redirect()->to(base_url('/proyek_pekerjaan'));
    }
    public function pekerjaan_saveedit($id)
    {
        if (!empty($_FILES['gambar']['name'])) {
            if (!$this->validate([
                'gambar' => [
                    'rules' => 'uploaded[gambar]|max_size[gambar, 2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih gambar terlebih dahulu',
                        'max_size' => 'Ukuran gambar melebihi batas yaitu 2 MB',
                        'is_image' => 'File yang dipilih bukan gambar',
                        'mime_in' => 'File yang dipilih bukan gambar'
                    ]
                ]
            ])) {
                return redirect()->to(base_url('/proyek_pekerjaan/edit/' . $this->request->getVar('id')))->withInput();
            }
            // ambil request gambar
            $fileGambar = $this->request->getFile('gambar');
            //generate nama
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan ke folder images  di public
            $fileGambar->move('images', $namaGambar);
        }else {$namaGambar = $this->request->getVar('oldgambar');}

        if (!empty($_FILES['gambar2']['name'])) {
            if (!$this->validate([
                'gambar2' => [
                    'rules' => 'uploaded[gambar2]|max_size[gambar2, 2048]|is_image[gambar2]|mime_in[gambar2,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih gambar terlebih dahulu',
                        'max_size' => 'Ukuran gambar melebihi batas yaitu 2 MB',
                        'is_image' => 'File yang dipilih bukan gambar',
                        'mime_in' => 'File yang dipilih bukan gambar'
                    ]
                ]
            ])) {
                return redirect()->to(base_url('/proyek_pekerjaan/edit/' . $this->request->getVar('id')))->withInput();
            }
            $fileGambar2 = $this->request->getFile('gambar2');
            $namaGambar2 = $fileGambar2->getRandomName();
            $fileGambar2->move('images', $namaGambar2);
        }else {$namaGambar2 = $this->request->getVar('oldgambar2');}

        if (!empty($_FILES['gambar3']['name'])) {
            if (!$this->validate([
                'gambar3' => [
                    'rules' => 'uploaded[gambar3]|max_size[gambar3, 2048]|is_image[gambar3]|mime_in[gambar3,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'uploaded' => 'Silahkan pilih gambar terlebih dahulu',
                        'max_size' => 'Ukuran gambar melebihi batas yaitu 2 MB',
                        'is_image' => 'File yang dipilih bukan gambar',
                        'mime_in' => 'File yang dipilih bukan gambar'
                    ]
                ]
            ])) {
                return redirect()->to(base_url('/proyek_pekerjaan/edit/' . $this->request->getVar('id')))->withInput();
            }
            $fileGambar3 = $this->request->getFile('gambar3');
            $namaGambar3 = $fileGambar3->getRandomName();
            $fileGambar3->move('images', $namaGambar3);
        }else {$namaGambar3 = $this->request->getVar('oldgambar3');}

        $this->M_pekerjaan->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kategori' => $this->request->getVar('kategori'),
            'klien' => $this->request->getVar('klien'),
            'tanggal_awal' => $this->request->getVar('tanggal_awal'),
            'tanggal_akhir' => $this->request->getVar('tanggal_akhir'),
            'keterangan' => $this->request->getVar('keterangan'),
            'gambar' => $namaGambar,
            'gambar2' => $namaGambar2,
            'gambar3' => $namaGambar3,
        ]);

        session()->setFlashdata('pesan', 'Data berhasil di ubah');
        return redirect()->to(base_url('/proyek_pekerjaan'));
    }
    public function pekerjaan_delete($id)
    {
        $this->M_pekerjaan->delete($id);
        return redirect()->to(base_url('/proyek_pekerjaan'));
    }
    // milik pekerjaan

}
