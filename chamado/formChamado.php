<?php

require_once('..\cabecalho.php');


if (isset($id)) {
  $acao="editar";
}else{
  $acao="novo";
}

 ?>

 <div class="container">
 	<div class="d-flex justify-content-center h-100">
 		<div class="card">
 			<div class="card-body">
 				<form class="" action="crudChamado.php?acao=<?=$acao?>" method="post">
 					<div class="input-group form-group">
 						<input name="titulo" type="text" class="form-control" placeholder="Título">
 					</div>
 					<div class="input-group form-group">
 						<textarea class="form-control" name="descricao" rows="5" placeholder="Descrição"></textarea>
 					</div>
          <div class="input-group form-group">
          <select class="form-control" name="id_categoria">
            <option value="NULL">
              Selecione uma categoria
            </option>
            <?php
              $tabela="categoria";
              require_once('..\sqlListaCategoria.php');
              foreach($lista_categoria as $item){
            ?>
              <option value="<?= $item['id']; ?>">
                <?= $item['descricao']; ?>
              </option>
            <?php } ?>
          </select>
          </div>
          <div class="input-group form-group">
          <select class="form-control" name="id_computador">
            <option value="NULL">
              Selecione um computador
            </option>
            <?php
              $tabela="computador";
              require_once('..\sqlListaComputador.php');
              foreach($lista_computador as $item){
            ?>
              <option value="<?= $item['id']; ?>">
                <?= $item['nome']; ?>
              </option>
            <?php } ?>
          </select>
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
