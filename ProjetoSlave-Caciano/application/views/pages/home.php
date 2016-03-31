<!DOCTYPE html>
<html>
<head>
	<title>Projeto Slave</title>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Carregar CSS -->
	<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.css') ?>">
	<!-- Carregar JavaScript -->
	<script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>

</head>
<body>
<center>
<div class="panel-heading">
	<div class="panel-body">
			<div class="panel panel-default">
				<ul class="nav nav-pills nav-stacked">
				  <li role="presentation" class="active"><a href="<?php echo base_url() ?>">Página Inicial</a></li>
				  <li role="presentation"><a href="<?php echo base_url('news/create') ?>">Nova Inserção</a></li>
				  <li role="presentation"><a href="<?php echo base_url('news/') ?>">Lista de Inserções</a></li>
				</ul>
		</div>
	</div>
</center>
	<div><p><?php $this->load->view('templates/footer'); ?></p></div>
</body>
</html>