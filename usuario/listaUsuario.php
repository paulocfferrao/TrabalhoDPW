<?php
require_once('..\cabecalho.php');
$tabela="usuarios";
require('..\sqlListaUser.php');
 ?>

<div class="chamados">
  <?php
    if (isset($_GET['msg'])) {
      if ($_GET['msg']=='200') {
  ?>
        <div class="alert alert-success" role="alert">
          Usuario cadastrado com sucesso!
        </div>

  <?php
      }elseif ($_GET['msg']=='201') {
  ?>
        <div class="alert alert-success" role="alert">
          Usuario alterado com sucesso!
        </div>
  <?php
      }elseif ($_GET['msg']=='400') {
  ?>
        <div class="alert alert-danger" role="alert">
          Não é possível excuir usuario já utilizado!
        </div>

  <?php
}elseif ($_GET['msg']=='202') {
  ?>
        <div class="alert alert-success" role="alert">
          Usuario excluida com sucesso!
        </div>
  <?php
      }
    }
  ?>

  <div class="list-group">
    <a href="formUsuario.php">
      <input type="submit" class="btn btn-primary novo" value="Novo">
    </a>
    <table>


    <?php

    foreach($lista_usuario as $item):
            $id = $item['id'];
    ?>

    <tr>
      <td class="col-sm-10">
    <a href="formUsuario.php?id=<?= $item['id']?>" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1"><?= $item['user'] ?></h5>
      </div>
    </a>
  </td>
  <td class="col-sm-1">
    <a href="opUsuario.php?acao=excluir&id=<?= $item['id']?>">
      <input type="submit" class="btn btn-danger" value="Excluir">
    </a>
    </td>
  </tr>


    <?php endforeach ?>
    </table>
  </div>

</div>

<?php
require_once('..\rodape.php');
//>
 ?>
