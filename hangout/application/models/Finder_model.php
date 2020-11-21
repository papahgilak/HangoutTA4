<?php

class Finder_model extends CI_model{
	// public function Bobot()
	// {
	// 	$bobot = [

	// 		"Bharga" => $this->input->post('Bharga'),
	// 		"Bfasilitas" => $this->input->post('Bfasilitas'),
	// 		"Bdayatampung" => $this->input->post('Bdayatampung'),
	// 		"Bjarak" => $this->input->post('Bjarak'),
	// 		"Bspot" => $this->input->post('Bspot'),



	// 	];

	// }

	// public function kriteria()
	// {
	// 	$query = "SELECT hangout.*, hangoutkriteria.*
	// 	FROM hangout JOIN hangoutkriteria
	// 	ON hangout.id_kriteria = hangoutkriteria.id";

	// 	return $this->db->query($query)->result_array();
	// }

	public function alternatif()
	{
		$query = "SELECT nama, alamat, harga, fasilitas, dayatampung, jarak, spot FROM datahangout";
		return $this->db->query($query)->result_array();
	}
}


// Btotal = Bharga + Bfasilitas + Bdayatampung + Bjarak + Bspot

// Wharga = (Bharga/Btotal) * -1
// Wfasilitas = (Bharga/Btotal) * 1
// Wdayatampung = (Bharga/Btotal) * 1
// Wjarak = (Bharga/Btotal) * -1
// Wspot = (Bharga/Btotal) * 1

// Foreach
// S = ($harga ^ Wharga) + ($fasilitas ^ Wfasilitas) + ($dayatampung ^ Wdayatampung) + ($jarak ^ Whjarak) + ($WSpot ^ Wspot) 
// Endforeach

// Foreach
// V = S / Stotal
// Endforeach