<?php
include_once 'dados_login.php';
$logged = $_SESSION['logged'] ?? NULL;
if (!$logged) die('Você precisa '."<a href='index.php'>Entrar</a>".' para acessar.'); /* se a sessão nao estiver logada, codigo morre aqui.*/
?>
  <?php
include_once 'menu.php'
?>

<p><h3>Este conteudo é exclusivo para os usuarios, Bem vindo.</h3></p>
<p><h4><?php echo "olá {$_SESSION['usuario']}, você está logado.";?></h4></p>