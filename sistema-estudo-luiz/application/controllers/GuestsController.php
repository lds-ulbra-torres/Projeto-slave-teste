<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestsController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guestsModel');
	}

	public function index()
	{	
		$guests = $this->guestsModel->getGuests();

		$dats = array("guests" => $guests);

		$this->load->view('guests/guests', $dats);
	}

	public function newGuest()
	{
		$dats = array(
			'name' => $this->input->post('name'),
			'rg' => $this->input->post('rg'),
			'bedroom' => $this->input->post('bedroom')
			);	

		$this->guestsModel->createGuest($dats);

		redirect('/');
	}

	public function updateGuestForm($id){
		$dats = array("id" => $id);

		$this->load->view('guests/updateGuest', $dats);
	}

	public function updateGuest(){
		$dats = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'rg' => $this->input->post('rg'),
			'bedroom' => $this->input->post('bedroom')
			);

		$this->guestsModel->updateGuest($dats);
		redirect('/');
	}

	public function deleteGuest($id){
		$dats = array('id' => "$id");
		$this->guestsModel->deleteGuest($dats);
		redirect('/');
	}
}

/* End of file guestsController.php */
/* Location: ./application/controllers/guestsController.php */