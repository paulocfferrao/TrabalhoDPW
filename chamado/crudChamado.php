<?php
session_start();
echo $_SESSION['user'];
require_once('..\pdo.php');
$acao = $_GET['acao'];
/*
if ($_GET['acao']=="novo") {
  $titulo = $_POST['titulo'];
  $descricao = $_POST['descricao'];
  $id_categoria = $_POST['id_categoria'];
  $id_computador = $_POST['id_computador'];

  $sql = "INSERT INTO chamados(titulo, descricao, id_categoria, id_computador)
          VALUES(:titulo, :descricao, :id_categoria,id_computador);";
          $query = $con->prepare($sql);
          $r   = $query->execute($registro);
          if($r==true) {
            echo "<br>".$titulo ."<br>".$descricao."<br>".$id_categoria."<br>".$id_computador;

          }else {
            echo "string";
          }

}

*/

 ?>
