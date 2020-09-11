<?php
include_once 'dados_login.php';
$logged = $_SESSION['logged'] ?? NULL;
if (!$logged) die('Você precisa '."<a href='index.php'>Entrar</a>".' para acessar.'); /* se a sessão nao estiver logada, codigo morre aqui.*/
?>
<?php
include_once 'menu.php'
?>
<p><h3>Conteúdo restrito da pagina 1</h3></p>