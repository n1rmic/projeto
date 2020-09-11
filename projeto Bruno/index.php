<?php
include_once 'dados_login.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="txt/css" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
  <title>Plus ultra</title>
  
</head>
<body>


  <?php
  if (!$_SESSION['logged']){
    include_once "form_login.php";
  }else {
    include_once "conteudo_restrito.php";
  }
  ?>
</body>
</html>