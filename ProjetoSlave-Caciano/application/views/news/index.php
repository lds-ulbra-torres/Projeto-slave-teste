<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Carregar CSS -->
	<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('includes/bootstrap/css/bootstrap.min.css') ?>">
	<!-- Carregar JavaScript -->
	<script src="<?php echo base_url('includes/bootstrap/js/bootstrap.min.js') ?>"></script>
	<style type="text/css">
	a{
		font-size: 20px;
	}
	a:link, a:visited {
		text-decoration: none;
		font-family: fantasy;
		}
	a:hover {
		text-decoration: underline; 
		color: #f00;
		}
	a:active {
		text-decoration: none
		}
	ul{
		margin-left: 46%;
	}
	</style>

			<title>Pagina Inicial</title>
	<link rel="stylesheet" href="">
</head>
<body>
<center>

		<div class="panel panel-primary">

		<!-- TITULO TABELA -->
			<div class="panel-heading">
			<a href="<?php echo base_url() ?>">
			<button type="button" class="btn btn-default" aria-label="Right Align">
  			<span class="glyphicon glyphicon-th" aria-hidden="true"></span>
			</button></a>

			<h2>Inserções</h2>
			</div>
	  		<div class="panel-body">
			<h2><?php echo $title; ?></h2>
			<hr>
			<?php foreach ($news as $news_item): ?>

		        <h3><?php echo $news_item['title']; ?></h3>
		        <div class="panel panel-default">
		                <h4><?php echo $news_item['text']; ?></h4>
		        </div>
		        <p>
				<ul class="nav nav-pills">
		       		 <li role="presentation"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">Ver Inserção</a></li>
		       	</ul>
		       	</p>

			<?php endforeach; ?>
		</div>
			<div><p><?php $this->load->view('templates/footer'); ?></p></div>
</body>
</body>
</html>