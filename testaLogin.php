<?php
session_start();
require_once('pdo.php');

if(isset($_POST['user']) && isset($_POST['senha'])){
    $user = $_POST['user'];
    $senha = md5($_POST['senha']);
    echo $senha.$user;


    $sql  = "SELECT count(*) as qtd FROM usuarios WHERE user=:user AND senha=:senha";
    $query = $con->prepare($sql);
    $params = array('user'=>$user,'senha'=>$senha);
    $r = $query->execute($params);
    $result = $query->fetch();
    if($result['qtd']==1){
        $_SESSION['user'] = $user;
        header('Location: ./chamado/listaChamados.php');
    }else{
          echo "$user $senha";
          $mensagem = "Usuário/Senha Incorretos";
    }
}


?>
