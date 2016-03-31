<?php if(! defined('BASEPATH')) exit ('No direct script acess allowed');
 	
 	class crud extends CI_Controller{

 		public  function  __construct()
 		{

 			parent::__construct();
 			//responsavel pelo helper
 			$this->load->helper('url');

 			//responsavel pelo formulario 
 			$this->load->helper('form');

 			//responsavel pela inserção 
 			$this->load->helper('array');

 			// responsavel pela validação
 			$this->load->library('form_validation');

 			// responsavel pela mensagem de inserção no bd
 			$this->load->library('session');


 		}
 		public function index(){
 			// $this->load->helper('url'); carrega o helper so para esse metodo
 			$dados=  array('titulo' => 'CRUD com codeigniter' ,
 			'tela'=>'', 
 			);

 			$this->load->view('crud', $dados);
 		} 

 		public function create(){
 			
 			// validação do form

 			$this->form_validation->set_rules('nome','NOME','trim|required|alpha|max_length[50]|ucwords');
 			$this->form_validation->set_rules('email','EMAIL','trim|required|strtolower|max_length[50]|valid_email|is_unique[curso.email]');
 			$this->form_validation->set_rules('login','LOGIN','trim|required|max_length[25]|strtolower|is_unique[curso.login]');
 			$this->form_validation->set_rules('senha','SENHA','trim|required|strtolower');
 				$this->form_validation->set_message('is_unique', 'Este %s  já esta cadastrado');
 				$this->form_validation->set_message('matches', 'O campo %s não é igual ao campo %s');
 			$this->form_validation->set_rules('senha2','SENHA2','trim|required|strtolower|matches[senha]');

 			if ($this->form_validation->run()==TRUE):
 			
 				$dados = elements(array('nome','email','login','senha'),$this->input->post());
 				$dados['senha']=md5($dados['senha']);
 				$this->load->model('crudModel','crud');
 				$this->crud->insertMet($dados);
 			endif;

 			$dados=  array('titulo' => 'CRUD &raquo; Create' ,
 			'tela'=>'create', 
 			);


 			$this->load->view('crud', $dados);

 		} 

 		public function retrieve(){
 			
 			$dados=  array('titulo' => 'CRUD &raquo; Retrieve' ,
 			'tela'=>'retrieve', 
 			);

 			$this->load->view('crud', $dados);
 		} 

 		public function update(){
 			
 			$dados=  array('titulo' => 'CRUD &raquo; Update' ,
 			'tela'=>'update', 
 			);

 			$this->load->view('crud', $dados);
 		} 

 		public function delete(){
 			
 			$dados=  array('titulo' => 'CRUD &raquo; Delete' ,
 			'tela'=>'delete', 
 			);

 			$this->load->view('crud', $dados);
 		} 
 	}