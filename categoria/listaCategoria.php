<?php
require_once('..\cabecalho.php');
$tabela="categoria";
require('..\sqlListaCategoria.php');
 ?>

<div class="chamados">
  <?php
    if (isset($_GET['msg'])) {
      if ($_GET['msg']=='200') {
  ?>
        <div class="alert alert-success" role="alert">
          Categoria enviada com sucesso!
        </div>

  <?php
      }elseif ($_GET['msg']=='201') {
  ?>
        <div class="alert alert-success" role="alert">
          Categoria alterada com sucesso!
        </div>
  <?php
      }
    }
  ?>

  <div class="list-group">
    <a href="formCategoria.php">
      <input type="submit" class="btn btn-primary novo" value="Novo">
    </a>
    <?php foreach($lista_categoria as $item):
            $id = $item['id'];
    ?>


    <a href="formCategoria.php?id=<?= $item['id']?>" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $item['descricao'] ?></h5>
      </div>
    </a>
    <a href="opCategoria.php?acao=excluir">
      <input type="submit" class="btn btn-danger" value="Excluir">
    </a>



    <?php endforeach ?>

  </div>

</div>

<?php
require_once('..\rodape.php');
//>
 ?>
