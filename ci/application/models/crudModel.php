<?php if(! defined('BASEPATH')) exit ('No direct script acess allowed');

/**
* 
*/
class CrudModel extends CI_Model
{
	
	public function  insertMet($dados=NULL)
	{
		if($dados!=NULL):
			$this->db->insert('curso',$dados);
			$this->session->set_flashdata('cadastrook', 'Cadastro efetuado!');//flashdata mostra uma mensagem  na proxima url que vira 
			redirect('crud/create'); //assim redireciono para page create
		endif;
	}
}