<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('home');
		$this->loadTable();
		$this->load->view('footer');
	}
	public function loadTable(){
		$this->load->model('crud');
		$data['user_data'] = $this->get_user_data();
		$this->load->view('table', $data);
	}
	public function get_user_data(){
		$this->load->model('crud');
		$result = $this->crud->get_user();
		return $result;
	}
	public function insert_user_data(){
		$this->load->model('crud');
		$this->crud->insert_user();
	}
	public function delete_user_data(){
		$this->load->model('crud');
		$id = $this->input->post('id');
		$this->crud->delete_user($id);
	}
	public function get_one_user_data(){
		$this->load->model('crud');
		$id = $this->input->post('id');
		$result['one_user'] = $this->crud->get_one_user($id);
		echo json_encode($result['one_user']);
	}
	public function update_user_data(){
		$this->load->model('crud');
		$this->crud->update_user();
	}
}
