<?php
$sql  = "SELECT * FROM $tabela1 ORDER BY nome;";
      $query = $con->query($sql);
      $lista_computador = $query->fetchAll();
 ?>
