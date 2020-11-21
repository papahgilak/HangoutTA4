<?php

class Cafel extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Cafel_model');
		$this->load->library('pagination');

	}


	public function index()
	{
		$data['judul'] = 'List Cafe';
		$data['hangout'] = $this->Cafel_model->getAllCafel();


		$this->load->view('templates/header', $data);
		$this->load->view('cafel/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Cafe';
		$data['hangout'] = $this->Cafel_model->getCafelById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('cafel/detail', $data);
		$this->load->view('templates/footer');
	}
}