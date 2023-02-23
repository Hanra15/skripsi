<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function kegiatan()
    {
        $data['title'] = "Analis Kimia | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Analis";
        $data['header'] = "Program Studi Analis Kimia";
        $this->template->load('templates/template', 'prodi/analis', $data);
    }
    public function pendaftaran()
    {
        $data['title'] = "Farmasi | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Farmasi";
        $data['header'] = "Program Studi Farmasi";
        $this->template->load('templates/template', 'prodi/farmasi', $data);
    }
    public function galeri()
    {
        $data['title'] = "Rekayasa Perangkat Lunak | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "RPL";
        $data['header'] = "Program Studi Rekayasa Perangkat Lunak";
        $this->template->load('templates/template', 'prodi/rpl', $data);
    }
}
