<!DOCTYPE html>
<html>
<head>
	<title>Alterar Hóspede</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
	<div class="containter" align="center">
		<h1>Alterar Hóspede</h1>

		<?php 
		echo '<div class="form-group">';
		echo form_open('alterar', 'class="form-inline"');

		echo form_input(array(
			'name' => 'id',
			'class' => 'form-control',
			'value' => "$id",
			'type' => 'hidden'
			));

		echo form_label('Nome: ');
		echo form_input(array(
			'name' => 'name',
			'class' => 'form-control',
			'maxlength' =>  '255',
			'placeholder' => 'Novo nome do hóspede'
			));
		
		echo form_label('RG: ');
		echo form_input(array(
			'name' => 'rg',
			'class' => 'form-control',
			'maxlength' => '13',
			'placeholder' => 'Novo rg'
			));

		echo form_label('Quarto: ');
		echo form_input(array(
			'name' => 'bedroom',
			'class' => 'form-control',
			'maxlength' => '255',
			'placeholder' => 'Novo quarto'
			));

		echo form_submit('sendGuest', 'Salvar', 'class="btn btn-primary"');
		echo form_close();

		echo '</div>';


		?>
	</div>

</body>
</html>