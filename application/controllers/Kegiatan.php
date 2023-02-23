<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function osis()
    {
        $data['title'] = "Organisasi Intra Sekolah | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "OSIS";
        $data['header'] = "OSIS AK Nusa Bangsa";
        $this->template->load('templates/template', 'kegiatan/osis', $data);
    }
    public function pramuka()
    {
        $data['title'] = "Pramuka | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Pramuka";
        $data['header'] = "Pramuka AK Nusa Bangsa";
        $this->template->load('templates/template', 'kegiatan/pramuka', $data);
    }
    public function kir()
    {
        $data['title'] = "Kelompok Ilmiah Remaja | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "KIR";
        $data['header'] = "Kelompok Ilmiah Remaja";
        $this->template->load('templates/template', 'kegiatan/kir', $data);
    }
    public function rohis()
    {
        $data['title'] = "Rohani Islam Ulil Albab | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Rohis";
        $data['header'] = "ROHSI Ulil Albab";
        $this->template->load('templates/template', 'kegiatan/rohis', $data);
    }
    public function teko()
    {
        $data['title'] = "Teknologi Komputer | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "TEKO";
        $data['header'] = "Teknologi Komputer";
        $this->template->load('templates/template', 'kegiatan/teko', $data);
    }
    public function pmr()
    {
        $data['title'] = "Palang Merah Remaja | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "PMR";
        $data['header'] = "Palang Merah Remaja";
        $this->template->load('templates/template', 'kegiatan/pmr', $data);
    }
    public function gps()
    {
        $data['title'] = "Gerakan Peduli Sahabat | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "GPS";
        $data['header'] = "Gerakan Peduli Sahabat";
        $this->template->load('templates/template', 'kegiatan/gps', $data);
    }
    public function paskibra()
    {
        $data['title'] = "Paskibra | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Paskibra";
        $data['header'] = "Paskibra";
        $this->template->load('templates/template', 'kegiatan/paskibra', $data);
    }
    public function futsal()
    {
        $data['title'] = "Futsal | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Futsal";
        $data['header'] = "Futsal";
        $this->template->load('templates/template', 'kegiatan/futsal', $data);
    }
    public function taekwondo()
    {
        $data['title'] = "Taekwondo | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Taekwondo";
        $data['header'] = "Taekwondo";
        $this->template->load('templates/template', 'kegiatan/taekwondo', $data);
    }
    public function silat()
    {
        $data['title'] = "Pencak Silat | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Silat";
        $data['header'] = "Pencak Silat";
        $this->template->load('templates/template', 'kegiatan/silat', $data);
    }
}
