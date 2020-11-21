<?php

class Finder extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('Finder_model');
	}



	public function index(){

		$data['judul'] = "Find Place";
		$this->load->view('templates/header', $data);
		$this->load->view('finder/index');
		$this->load->view('templates/footer');
	}

	public function hasil(){
		$bobot = [

			"Bharga" => $this->input->post('Bharga'),
			"Bfasilitas" => $this->input->post('Bfasilitas'),
			"Bdayatampung" => $this->input->post('Bdayatampung'),
			"Bjarak" => $this->input->post('Bjarak'),
			"Bspot" => $this->input->post('Bspot'),
		];

		// HITUNG NILAI W
		$btot = array_sum($bobot);

		$wharga = ($bobot['Bharga'] / $btot) * -1;
		$wfasilitas = $bobot['Bfasilitas'] / $btot;
		$wdayatampung = $bobot['Bdayatampung'] / $btot;
		$wjarak = ($bobot['Bjarak'] / $btot) * -1;
		$wspot = $bobot['Bspot'] / $btot;

		//HITUNG NILAI S
		$alternatif = $this->Finder_model->alternatif();
		$s = [];
		$v = [];
		$i = 0;
		foreach ($alternatif as $value) {
		    $s[$i] = pow(floatval($value['harga']), $wharga) + 
		    		 pow(floatval($value['fasilitas']), $wfasilitas) + 
				     pow(floatval($value['dayatampung']), $wdayatampung) + 
				     pow(floatval($value['jarak']), $wjarak) + 
				     pow(floatval($value['spot']), $wspot);
		    $i++;


			}

		$j = 0;
		foreach ($s as $refrensi) {
			
			$v[$j] = $s[$j]/array_sum($s);
			$j++;
		}

		var_dump($v);
		

		$data['judul'] = "Hasil Perhitungan";
		$this->load->view('templates/header', $data);
		$this->load->view('finder/hasil');
		$this->load->view('templates/footer');

	}
}