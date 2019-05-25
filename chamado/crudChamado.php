  <?php
  session_start();
  require_once('..\pdo.php');
  $user = $_SESSION['user'];
  $acao = $_GET['acao'];
  $sql = "SELECT id FROM usuarios WHERE user=:user;";
  $query = $con->prepare($sql);
  $params = array('user'=>$user);
  $r = $query->execute($params);
  $result = $query->fetch();


   if ($acao=="novo") {
     // var_dump($_POST);
    $registro['titulo'] = $_POST['titulo'];
    $registro['descricao'] = $_POST['descricao'];
    $registro['id_requerente'] = $result['id'];
    $registro['id_categoria'] = $_POST['id_categoria'];
    $registro['id_computador'] = $_POST['id_computador'];
    $registro['status'] = "Novo";
//    var_dump($registro);

    $sql = "INSERT INTO chamados(titulo, descricao,idrequerente, idcategoria, idcomputador,status)
                         VALUES(:titulo, :descricao,:id_requerente, :id_categoria,:id_computador,:status);";
    $query = $con->prepare($sql);
    $r   = $query->execute($registro);
    if($r==true) {
      header('Location:listaChamados.php?msg=200');

    }else {
      echo "<h1>ERRO</h1>";
    }

  }



   ?>
