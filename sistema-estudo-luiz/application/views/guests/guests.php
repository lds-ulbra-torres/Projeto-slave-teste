<!DOCTYPE html>
<html>
<head>
	<title>Sistema</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>
	<div style="text-align: center;" class="container-fluid">
		<h1>Cadastro</h1>

		<?php
		echo form_open('cadastrar', 'class="form-inline"');

		echo form_label('Nome: ');
		echo form_input(array(		
			'name' => 'name',
			'class' => 'form-control',
			'maxlength' => '255',
			'placeholder' => 'Nome do hóspede'
			));

		echo form_label('RG: ');
		echo form_input(array(
			'name' => 'rg',
			'class' => 'form-control',
			'maxlength' => '13',
			'placeholder' => 'Rg do hospede'
			));

		echo form_label('Número do quarto: ');
		echo form_input(array(
			'name' => 'bedroom',
			'class' => 'form-control',
			'maxlength' => '10',
			'placeholder' => 'Número do quarto'
			));

		echo form_submit('sendGuest', 'Salvar', 'class="btn btn-primary"');
		echo form_close();
		?>
	</div>
	<br>
	<hr>
	<br>
	<div style="text-align: center;">
		<h1>Hóspedes</h1>
		<table align="center" class="table table-hover">
			<?php foreach($guests as $guest) : ?>
				<tr>
					<td><strong>ID: </strong><?= $guest['id'] ?></td>
					<td><strong>Nome: </strong><?= $guest['name']?></td>
					<td><strong>RG: </strong><?= $guest['rg']; ?></td>
					<td><strong>Quarto: </strong><?= $guest['bedroom']; ?></td>
					<td>
					<?= anchor("tabela-alterar/{$guest['id']}/", 'Alterar', 'class="btn btn-danger"'); ?>
					<?= anchor("deletar/{$guest['id']}/", 'Deletar', 'class="btn btn-danger"'); ?>
					</td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>