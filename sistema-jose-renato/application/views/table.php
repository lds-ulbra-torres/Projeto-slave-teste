
			<table id="tableUser" class="table">
				<thead>
					<td>
						Nome
					</td>
					<td>
						E-mail
					</td>
					<td>
						Telefone
					</td>
					<td>
						Idade
					</td>
				</thead>
				<tbody>
					<?php
						foreach($user_data as $dados){ ?>
							<tr>
								<td>
									<?php echo $dados->nome; ?>
								</td>
								<td>
									<?php echo $dados->email; ?>
								</td>
								<td>
									<?php echo $dados->telefone; ?>
								</td>
								<td>
									<?php echo $dados->idade;?>
								</td>
								<td>
									<button type="button" id="<?php echo $dados->id;?>" data-toggle="modal" data-target="#myModalEdit" class="edit btn btn-default">Editar</button> | <button type="button" id="<?php echo $dados->id; ?>" class="delete btn btn-default">Deletar</button>
								</td>		
							</tr>
						<?php }
					?>
				</tbody>
			</table>