<?php

require_once('..\cabecalho.php');
//definir ?acao=acao
 ?>

 <div class="container">
 	<div class="d-flex justify-content-center h-100">
 		<div class="card">
 			<div class="card-body">
 				<form action="crudChamado.php?acao=acao" method="post">
 					<div class="input-group form-group">
 						<div class="input-group-prepend">

 						</div>
 						<input name="titulo" type="text" class="form-control" placeholder="Título">

 					</div>
 					<div class="input-group form-group">
 						<div class="input-group-prepend">

 						</div>
 						<textarea class="form-control" name="descricao" rows="5" placeholder="Descrição"></textarea>
 					</div>
 					<div class="form-group">
 						<input type="submit" value="Enviar" class="btn float-right login_btn">
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>



 <?php
 require_once('..\rodape.php');

  ?>
