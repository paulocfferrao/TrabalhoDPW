<?php
$sql  = "SELECT * FROM $tabela WHERE STATUS!='Fechado' ORDER BY id DESC;";
      $query = $con->query($sql);
      $lista = $query->fetchAll();

 ?>
