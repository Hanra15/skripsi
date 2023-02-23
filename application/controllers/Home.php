<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Beranda | SMK AK Nusa Bangsa";
        $this->template->load('templates/template', 'home', $data);
    }
}
