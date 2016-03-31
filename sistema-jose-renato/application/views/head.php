<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
	<head>
		<meta charset="UTF-8" />
		<title> CRUD </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$("#formInsert").submit(function(e){
					e.preventDefault();	
					$.ajax({
						url: "<?php echo site_url('/Welcome/insert_user_data')?>",
						type: "POST",
						data: $("#formInsert").serialize(),
						success: function(data){
							alert("foi");
							$('#myModal').modal('hide');
							$("#divTable").load('<?php echo site_url('/Welcome/loadTable'); ?>' + "#tableUser");
							$("html").load('<?php echo site_url('/Welcome/loadHead'); ?>');
							$('#formInsert').each (function(){
								this.reset();
							});
						},
						error: function(){
							alert("deu pau");
						}	
					});
				});
				$(".delete").click(function(){
					$.ajax({
						url: "<?php echo site_url('/Welcome/delete_user_data')?>",
						type: "POST",
						data: {
							id: $(this).attr("id")
						},
						success: function(data){
							$("#divTable").load('<?php echo site_url('/Welcome/loadTable'); ?>' + "#tableUser");
							alert("Deletado");
						},
						error: function(){
							alert("Erro ao deletar");
						}
						
					});
				});
				$(".edit").click(function(){
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
							$("#divTable").load('<?php echo site_url('/Welcome/loadTable'); ?>' + "#tableUser");
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