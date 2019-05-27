  <?php
  session_start();
  require_once('..\pdo.php');
  $acao=$_GET['acao'];
  $registro['descricao'] = $_POST['descricao'];
  //var_dump($registro);

   if ($acao=="novo") {

    $sql = "INSERT INTO categoria(descricao)VALUES(:descricao);";
    $query = $con->prepare($sql);
    $r   = $query->execute($registro);
    if($r==true) {
      header('Location:listaCategoria.php?msg=200');

    }else {
      echo "<h1>ERRO  $r</h1> ";
    }

  }elseif ($acao=="editar") {
    $registro['id']= $_GET['id'];
    $sql = "UPDATE categoria SET descricao=:descricao WHERE id=:id";
    $query = $con->prepare($sql);
    var_dump($registro);
    $r   = $query->execute($registro);
    if($r==true) {
      header('Location:listaCategoria.php?msg=201');

    }else {
      echo "<h1>ERRO</h1>";
    }

  }



   ?>
