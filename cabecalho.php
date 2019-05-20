<?php
session_start();

if (!isset($_SESSION['user'])){
  header('Location:..\index.php');
}
require_once('pdo.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chamados Web</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
body{
 background-image: url('../img/fundo.jpg');
 background-size: cover;
 background-repeat: no-repeat;
 height: 100%;
 width: 100%;
 font-family: 'Numans', sans-serif;
}

</style>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><?= $_SESSION['user']?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#corNavbar01" aria-controls="corNavbar01" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="corNavbar01">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Novo <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Usuários</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Computadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Categorias</a>
            </li>
          </ul>
          <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Pesquisar</button>
          </form>
        </div>
      </nav>
  </header>
