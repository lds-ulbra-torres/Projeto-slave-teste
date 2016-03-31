<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class crud extends CI_Model {
	
	public function get_user(){
		$query  = $this->db->get('usuarios');
		return $query->result();
	}
	public function insert_user(){
		$data_insert = array(
			'nome' => $this->input->post('nome'),
			'email' => $this->input->post('email'),
			'telefone' => $this->input->post('telefone'),
			'idade' => $this->input->post('idade')
		);
		$this->db->insert('usuarios', $data_insert);
	}
	public function delete_user($id){
		$this->db->where('id', $id);
		$this->db->delete('usuarios');
	}
	public function get_one_user($id){
		$this->db->where('id', $id);
		$query = $this->db->get('usuarios');
		return $query->result();
	}
	public function update_user(){
		$data_edit = array(
			'nome' => $this->input->post('nomeEdit'),
			'email' => $this->input->post('emailEdit'),
			'telefone' => $this->input->post('telefoneEdit'),
			'idade' => $this->input->post('idadeEdit')
		);
		$data_id = $this->input->post('idEdit');
		$this->db->where('id', $data_id);
		$this->db->update('usuarios', $data_edit);
	}
}