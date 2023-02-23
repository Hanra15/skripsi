<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function sambutan()
    {
        $data['title'] = "Sambutan Kepala Sekolah | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Sambutan";
        $data['header'] = "Sambutan Kepala Sekolah";
        $this->template->load('templates/template', 'profil/sambutan', $data);
    }
    public function visimisi()
    {
        $data['title'] = "Visi & Misi | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Visi misi";
        $data['header'] = "Visi & Misi";
        $this->template->load('templates/template', 'profil/visimisi', $data);
    }
    public function guru()
    {
        $data['title'] = "Data Guru | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Guru";
        $data['header'] = "Data Guru SMK AK Nusa Bangsa";
        $this->template->load('templates/template', 'profil/guru', $data);
    }
    public function fasilitas()
    {
        $data['title'] = "Fasilitas Sekolah | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Fasilitas";
        $data['header'] = "Fasilitas Sekolah";
        $this->template->load('templates/template', 'profil/fasilitas', $data);
    }
    public function prestasi()
    {
        $data['title'] = "Prestasi Siswa | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Prestasi";
        $data['header'] = "Prestasi Siswa";
        $this->template->load('templates/template', 'profil/prestasi', $data);
    }
    public function galeri()
    {
        $data['title'] = "Galeri | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Galeri";
        $data['header'] = "Galeri SMK AK Nusa Bangsa";
        $this->template->load('templates/template', 'profil/galeri', $data);
    }
}
