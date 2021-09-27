<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_layanan extends CI_Controller

{	function __construct()
	{
		parent::__construct();
		$this->load->model('layanan_m','layanan');
	}

	public function index()
	{
		$data = array(
			'layanan' => $this->layanan->get()->result(),
		);
		
		// template header dan navigasi
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/nav');
		// isi
		$this->load->view('admin/pages/layanan/list', $data);
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

	public function proses(){
		if(isset($_POST['add'])) {
			$nama_layanan = $this->input->post('nama_layanan');
			$deskripsi = $this->input->post('deskripsi');
			$file = $this->input->post('file');

			$data = array(
				'nama_layanan' => $this->input->post('nama_layanan'),
				'deskripsi'		=> $this->input->post('deskripsi'),
				'file'			=>$this->input->post('file')
			);
			$this->layanan->insert($data);
			
		}
		redirect('admin/c_layanan');
	}

	public function edit($id= null){
		if(isset($_POST['edit'])) {
			$inputan = $this->input->post(null, TRUE);
			$this->layanan->edit($inputan);
		}
	}
	
}
