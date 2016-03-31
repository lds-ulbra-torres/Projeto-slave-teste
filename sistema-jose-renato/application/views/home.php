<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> CRUD </title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				function reloadTable(){
					$.ajax({
						url: "<?php echo site_url('/Welcome/loadTable'); ?>",
						type: "POST",
						dataType: "html",
						data: $("body"),
						success: function(data){
							$("#divTable").html(data);
						},
						error: function(){
							alert("deu pau");
						}
					});
				}
				$("#formInsert").submit(function(e){
					e.preventDefault();	
					$.ajax({
						url: "<?php echo site_url('/Welcome/insert_user_data')?>",
						type: "POST",
						data: $("#formInsert").serialize(),
						success: function(data){
							alert("foi");
							$('#myModal').modal('hide');
							reloadTable();
							$('#formInsert').each (function(){
								this.reset();
							});
						},
						error: function(){
							alert("deu pau");
						}	
					});
				});
				$("#divTable").on("click", ".delete", function(){
					$.ajax({
						url: "<?php echo site_url('/Welcome/delete_user_data')?>",
						type: "POST",
						data: {
							id: $(this).attr("id")
						},
						success: function(data){
							reloadTable();
							alert("Deletado");
						},
						error: function(){
							alert("Erro ao deletar");
						}
						
					});
				});
				$("#divTable").on("click", ".edit", function(){
					$.ajax({
						url: "<?php echo site_url('/Welcome/get_one_user_data')?>",
						type: "POST",
						data: {
							id: $(this).attr("id")
						},
						dataType: "json",
						success: function(data){
							$("input[name=idEdit]").val(data[0].id);
							$("input[name=nomeEdit]").val(data[0].nome);
							$("input[name=telefoneEdit]").val(data[0].telefone);
							$("input[name=emailEdit]").val(data[0].email);
							$("input[name=idadeEdit]").val(data[0].idade);
						},
						error: function(){
							alert("Deu pau");
						}
					});	
				});
				$("#formEdit").submit(function(e){
					e.preventDefault();
					$.ajax({
						url: "<?php echo site_url('/Welcome/update_user_data')?>",
						type: "POST",
						data: $("#formEdit").serialize(),
						success: function(data){
							$('#myModalEdit').modal('hide');
							reloadTable();
							alert("Usuário editado");
						},
						error: function(){
							alert("Deu pau");
						}
					});
				});
			});
			
		</script>
	</head>
	<body >
		<h1>CRUD simples</h1>
		<button type="button" id="modal" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Inserir</button>
		
		<div id="myModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Dados do usuário</h4>
			  </div>
			  <div class="modal-body">
				<form id="formInsert" method="post">
					Nome:
					<input type="text" name="nome" class="form-control"/>
					<br>
					E-mail:
					<input type="text" name="email" class="form-control"/>
					<br>
					Telefone:
					<input type="text" name="telefone" class="form-control" />
					<br>
					Idade:
					<input type="text" name="idade" class="form-control" />
					<br>
					<input  class="btn btn-default" type="submit"/>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			  </div>
			</div>

		  </div>
		  
		</div>
		<div id="myModalEdit" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Alterar dados do usuário</h4>
			  </div>
			  <div class="modal-body">
				<form id="formEdit" method="post">
					<input type="hidden" value="" name="idEdit" />
					Nome:
					<input type="text"  name="nomeEdit" class="form-control"/>
					<br>
					E-mail:
					<input type="text" name="emailEdit" class="form-control"/>
					<br>
					Telefone:
					<input type="text" name="telefoneEdit" class="form-control" />
					<br>
					Idade:
					<input type="text" name="idadeEdit" class="form-control" />
					<br>
					<input class="btn btn-default" type="submit"/>
				</form>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			  </div>
			</div>

		  </div>
		  
		</div>
		<div id="divTable">
