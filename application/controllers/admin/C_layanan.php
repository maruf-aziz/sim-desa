<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_layanan extends CI_Controller
{

	public function index()
	{

		
		// template header dan navigasi
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav');
		// isi
		$this->load->view('admin/pages/layanan/list');
		// template footer
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		// template header dan navigasi
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav');
		// isi
		$this->load->view('admin/pages/layanan/add');
		// template footer
		$this->load->view('admin/template/footer');
	}
}
