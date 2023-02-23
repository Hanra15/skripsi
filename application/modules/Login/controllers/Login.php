<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{


	public function index()
	{
		$this->template->load('templates/template-login', 'login');
	}
}
