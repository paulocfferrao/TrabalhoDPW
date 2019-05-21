<?php
require_once('..\cabecalho.php');

$sql  = "SELECT * FROM chamados;";
      $query = $con->query($sql);
      $lista = $query->fetchAll();

 ?>

<div class="container">


  <div class="list-group">
    <?php foreach($lista as $item):$id = $item['id'];?>

    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $item['titulo'] ?></h5>
        <small><!--> Status </--></small>
      </div>
      <p class="mb-1"><?= $item['descricao']?></p>
      <small><!--> Requerente </--></small></small>
    </a>
    <?php endforeach ?>

  </div>

</div>

<?php
require_once('..\rodape.php');
 ?>
