<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_pengaduan extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// template header dan navigasi
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav');
		// isi
		$this->load->view('admin/pages/pengaduan/list');
		// template footer
		$this->load->view('admin/template/footer');
	}

	public function add()
	{
		// template header dan navigasi
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav');
		// isi
		$this->load->view('admin/pages/pengaduan/add');
		// template footer
		$this->load->view('admin/template/footer');
	}
}
