<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
			<!-- Carregar CSS -->
			<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.css') ?>">
			<!-- Carregar JavaScript -->
			<script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>
				<title>Nova Inserção</title>
			<link rel="stylesheet" href="">
		</head>
		<body>
		<center>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<a href="<?php echo base_url() ?>">
				<button type="button" class="btn btn-default" aria-label="Right Align">
	  			<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
				</button></a>
			</div>

		<?php echo validation_errors(); ?>

		<?php echo form_open('news/create'); ?>

		<div class="control-group">
		  <label class="control-label">Titulo</label>
		  <div class="controls">
		    <input id="title" name="title" type="text" class="input-xlarge" required>
		  </div>
		</div>

		<div class="control-group">
		  		<label class="control-label">Texto</label>
		  	<div class="controls">
		    	<textarea name="text"></textarea><br />
		  	</div>
		  </div>

			
		    <!-- Enviar Botao -->
			<div class="control-group">
			  <label class="control-label"></label>
			  <div class="controls">
			    <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
			  </div>
			</div>


		</form>
			
		</body>
</html>