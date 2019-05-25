<?php
$sql  = "SELECT * FROM $tabela ORDER BY id DESC;";
      $query = $con->query($sql);
      $lista = $query->fetchAll();
 ?>
