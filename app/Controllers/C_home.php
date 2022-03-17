<?php

namespace App\Controllers;

use App\Models\M_bidang;
use App\Models\M_carousel;
use App\Models\M_datadiri;
use App\Models\M_keluarga;
use App\Models\M_ringkasan;
use App\Models\M_pekerjaan;
use App\Models\M_testimoni;

class C_home extends BaseController
{
    public function __construct()
    {
        helper(array('form', 'uri'));
        $this->M_carousel = new M_carousel();
        $this->M_bidang = new M_bidang();
        $this->M_pekerjaan = new M_pekerjaan();
        $this->M_ringkasan = new M_ringkasan();
        $this->M_testimoni = new M_testimoni();
        $this->M_datadiri = new M_datadiri();
        $this->M_keluarga = new M_keluarga();
    }

    public function index()
    {
        $data['navlink'] = "dashboard";

        // carosel
        $data['carosel'] = $this->M_carousel->getCarousel(false, 'beranda');

        // bidang
        $data['bidang'] = $this->M_bidang->getBidang();

        // proyek
        $data['pekerjaan'] = $this->M_pekerjaan->getPekerjaanHome();
        $data['gambar_pekerjaan'] = $this->M_pekerjaan->getPekerjaanHomeGambar();

        // ringkasan
        $data['ringkasan'] = $this->M_ringkasan->getRingkasan();

        // proyek lainya
        $data['pekerjaan_lain'] = $this->M_pekerjaan->getPekerjaanLain();

        // testimoni
        $data['testimoni'] = $this->M_testimoni->getTestimoni(false);

        // kontak
        $data['kontak'] = $this->M_datadiri->getDatadiri();

        return view('v_home', $data);
    }

    public function about()
    {
        $data['navlink'] = "about";

        // carosel
        $data['carosel'] = $this->M_carousel->getCarousel(false, 'tentang');

        // bidang
        $data['bidang'] = $this->M_bidang->getBidang();

        //pekerjaan
        $data['pekerjaan'] = $this->M_pekerjaan->getPekerjaan();

        // keluarga
        $data['keluarga'] = $this->M_keluarga->getKeluarga();

        // kontak
        $data['kontak'] = $this->M_datadiri->getDatadiri();

        return view('v_about', $data);
    }

    public function project()
    {
        $data['navlink'] = "project";

        // carosel
        $data['carosel'] = $this->M_carousel->getCarousel(false, 'proyek');

        // proyek
        $data['RencanaJalanLimit'] = $this->M_pekerjaan->getPekerjaanProyek(false, "Perencanaan Jalan");
        $data['PengawasJalanLimit'] = $this->M_pekerjaan->getPekerjaanProyek(false, "Pengawasan Jalan");
        $data['RencanaPengairanLimit'] = $this->M_pekerjaan->getPekerjaanProyek(false, "Perencanaan Pengairan");
        $data['PengawasPengairanLimit'] = $this->M_pekerjaan->getPekerjaanProyek(false, "Pengawasan Pengairan");
        $data['RencanaGedungLimit'] = $this->M_pekerjaan->getPekerjaanProyek(false, "Perencanaan Gedung");
        $data['PengawasGedungLimit'] = $this->M_pekerjaan->getPekerjaanProyek(false, "Pengawasan Gedung");
        $data['RencanaDatabaseLimit'] = $this->M_pekerjaan->getPekerjaanProyek(false, "Konsultansi Perencanaan Non Konstruksi");

        // testimoni
        $data['testimoni'] = $this->M_testimoni->getTestimoni(false);

        // kontak
        $data['kontak'] = $this->M_datadiri->getDatadiri();

        return view('v_project', $data);
    }

    public function contact()
    {
        $data['navlink'] = "contact";

        // carosel
        $data['carosel'] = $this->M_carousel->getCarousel(false, 'kontak');

        // testimoni
        $data['testimoni'] = $this->M_testimoni->getTestimoni(false);

        // kontak
        $data['kontak'] = $this->M_datadiri->getDatadiri();

        return view('v_contact', $data);
    }

    public function detail($id)
    {
        $data['navlink'] = "project";

        // carosel
        $data['carosel'] = $this->M_carousel->getCarousel(false, 'proyek');

        // proyek
        $data['pekerjaan'] = $this->M_pekerjaan->getPekerjaan($id);

        // testimoni
        $data['testimoni'] = $this->M_testimoni->getTestimoni(false);

        // kontak
        $data['kontak'] = $this->M_datadiri->getDatadiri();

        return view('v_detail_pekerjaan', $data);
    }
    
    public function detail2($kategori)
    {
        $data['navlink'] = "project";

        // carosel
        $data['carosel'] = $this->M_carousel->getCarousel(false, 'proyek');

        switch ($kategori) {
            case "rencanajalan":
                $data['proyek'] = $this->M_pekerjaan->getPekerjaanProyek(true, "Perencanaan Jalan");
                $data['kategori'] = "Perencanaan Jalan";
                break;
            case "pengawasjalan":
                $data['proyek'] = $this->M_pekerjaan->getPekerjaanProyek(true, "Pengawasan Jalan");
                $data['kategori'] = "Pengawasan Jalan";

                break;
            case "rencanapengairan":
                $data['proyek'] = $this->M_pekerjaan->getPekerjaanProyek(true, "Perencanaan Pengairan");
                $data['kategori'] = "Perencanaan Pengairan";

                break;
            case "pengawaspengairan":
                $data['proyek'] = $this->M_pekerjaan->getPekerjaanProyek(true, "Pengawasan Pengairan");
                $data['kategori'] = "Pengawasan Pengairan";

                break;
            case "rencanagedung":
                $data['proyek'] = $this->M_pekerjaan->getPekerjaanProyek(true, "Perencanaan Gedung");
                $data['kategori'] = "Perencanaan Gedung";

                break;
            case "pengawasgedung":
                $data['proyek'] = $this->M_pekerjaan->getPekerjaanProyek(true, "Pengawasan Gedung");
                $data['kategori'] = "Pengawasan Gedung";

                break;
            case "rencanadatabase":
                $data['proyek'] = $this->M_pekerjaan->getPekerjaanProyek(true, "Konsultansi Perencanaan Non Konstruksi");
                $data['kategori'] = "Konsultansi Perencanaan Non Konstruksi";

                break;
            default:
                null;
        }
        // proyek
        // $data['pekerjaan'] = $this->M_pekerjaan->getPekerjaan($kategori);

        // testimoni
        $data['testimoni'] = $this->M_testimoni->getTestimoni(false);

        // kontak
        $data['kontak'] = $this->M_datadiri->getDatadiri();

        return view('v_project2', $data);
    }
}
