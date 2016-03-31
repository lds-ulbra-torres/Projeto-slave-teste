<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestsModel extends CI_Model {
	
	public function createGuest($dats){
		return $this->db->insert('guests', $dats);
	}

	public function getGuests(){
		return $this->db->get('guests')->result_array();
	}

	public function updateGuest($dats){
		return $this->db->replace('guests', $dats);
	}

	public function deleteGuest($id){
		return $this->db->delete('guests', $id);
	}

}
/* End of file modelName.php */
/* Location: ./application/models/modelName.php */