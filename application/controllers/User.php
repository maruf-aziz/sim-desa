<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
		// template header dan navbar
		$this->load->view('user/template/header');
		$this->load->view('user/template/nav');
		// isi
		$this->load->view('user/home');
		// template footer
		$this->load->view('user/template/footer');
	}

	public function layanan()
	{
		// template header dan navbar
		$this->load->view('user/template/header');
		$this->load->view('user/template/nav');
		// isi
		$this->load->view('user/layanan');
		// template footer
		$this->load->view('user/template/footer');
	}

	public function pengaduan()
	{
		// template header dan navbar
		$this->load->view('user/template/header');
		$this->load->view('user/template/nav');
		// isi
		$this->load->view('user/pengaduan');
		// template footer
		$this->load->view('user/template/footer');
	}

	public function masuk()
	{
		// isi
		$this->load->view('user/masuk');
		
	}

	public function daftar()
	{
		// isi
		$this->load->view('user/daftar');
		
	}


	public function test()
	{
		echo "Hello Gaise";
	}
}
