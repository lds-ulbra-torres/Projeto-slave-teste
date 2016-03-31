<?php 
	echo form_open('crud/create');
	echo validation_errors('<p>','<p>');
	if ($this->session->flashdata('cadastrook')): 
		echo '<p>'.$this->session->flashdata('cadastrook').'<p>';
	endif;
	echo form_label('Nome: <p>');
	//echo form_input( array('id'=>'nome','name'=>'nome'),'','autofocus');
	echo form_input( array('name'=>'nome'),set_value('nome'),'autofocus');
	echo form_label('<p>Email: <p>');
	echo form_input( array('name'=>'email'),set_value('email'));
	echo form_label('<p> Login: <p>');
	echo form_input( array('name'=>'login'),set_value('login'));
	echo form_label('<p>Senha: <p>');
	echo form_input( array('name'=>'senha'),set_value('senha'));
	echo form_label('<p>Repita a Senha<p>');
	echo form_input( array('name'=>'senha2'),set_value('senha2'));
	echo "<p>";
	echo form_submit( array('name'=>'cadastrar'),'Cadastrar');
	echo form_close();
  ?>