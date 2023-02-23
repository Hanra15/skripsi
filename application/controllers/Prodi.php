<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function analis()
    {
        $data['title'] = "Analis Kimia | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Analis";
        $data['header'] = "Program Studi Analis Kimia";
        $this->template->load('templates/template', 'prodi/analis', $data);
    }
    public function farmasi()
    {
        $data['title'] = "Farmasi | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "Farmasi";
        $data['header'] = "Program Studi Farmasi";
        $this->template->load('templates/template', 'prodi/farmasi', $data);
    }
    public function rpl()
    {
        $data['title'] = "Rekayasa Perangkat Lunak | SMK AK Nusa Bangsa";
        $data['breadcrumb'] = "RPL";
        $data['header'] = "Program Studi Rekayasa Perangkat Lunak";
        $this->template->load('templates/template', 'prodi/rpl', $data);
    }
}
