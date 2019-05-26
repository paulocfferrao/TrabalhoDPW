<?php
require_once('..\cabecalho.php');
$tabela = "chamados";
require('..\sqlLista.php');
 ?>

<div class="chamados">
  <?php if (isset($_GET['msg'])) {
    if ($_GET['msg']=='200') {    ?>
      <div class="alert alert-success" role="alert">
        Chamado enviado com sucesso!
      </div>

    <?php
    }
  }  ?>

  <div class="list-group">
    <?php foreach($lista as $item):$id = $item['id'];?>

    <a href="formChamado.php?id=<?= $item['id']?>" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $item['titulo'] ?></h5>
        <?php $status = buscaValor($item['id'],"chamados","STATUS",$con); ?>
        <small><?= $status;?></small>
      </div>
      <p class="mb-1"><?= $item['descricao']?></p>
      <?php $requerente = buscaValor($item['idrequerente'],"usuarios","user",$con); ?>
      <small>Requerente: <?= $requerente;?></small></small>
    </a>
    <?php endforeach ?>

  </div>

</div>

<?php
require_once('..\rodape.php');
 ?>
