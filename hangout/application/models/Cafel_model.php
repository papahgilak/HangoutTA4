<?php

class Cafel_model extends CI_model
{
	public function getAllCafel()
	{
		return $this->db->get('hangout')->result_array();
	}

	public function getCafelById($id)
	{
		return $this->db->get_where('hangout',['id' => $id])->row_array();	
	}
	
}