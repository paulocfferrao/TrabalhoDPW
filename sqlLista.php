<?php

require 'getIdUser.php';
$id=$idUser['id'];
$tipo = buscaValor($id,"usuarios","tipo",$con);

if ("admin"==$tipo || $tipo=="tecnico") {
  $sql  = "SELECT * FROM $tabela WHERE STATUS!='Fechado' ORDER BY id DESC;";
        $query = $con->query($sql);
        $lista = $query->fetchAll();
}else {

  $sql  = "SELECT * FROM $tabela WHERE STATUS!='Fechado' AND idrequerente = $id ORDER BY id DESC;";
        $query = $con->query($sql);
        $lista = $query->fetchAll();
}


 ?>
