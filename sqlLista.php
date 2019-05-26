<?php
$sql  = "SELECT * FROM $tabela WHERE STATUS!='Fechado' ORDER BY id DESC;";
      $query = $con->query($sql);
      $lista = $query->fetchAll();

function buscaValor($id,$tabelaBusca,$colunaBusca,$con){
  $sql  = "SELECT * FROM $tabelaBusca WHERE id=:id;";

  $query = $con->prepare($sql);
  $params = array('id'=>$id);
  $r = $query->execute($params);
  $registro = $query->fetch();

  return $registro[$colunaBusca];
}
 ?>
