<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class cadastroC extends  CI_Controller
	{
		
		public function index()
		{
			$this->load->view('homeView');
			
		}

		public function exemplo3 (){
			$dados = array(
				'titulo'=> 'passagem por controller',
				'texto'=> 'passagem por controlador',)  ;
			$this->load->view('exemplo3',$dados);
		}
	}



?>