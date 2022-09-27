<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
</head>

<body>
    <div class="container">


<?php
include_once("../servidor.php");
  // fazer o codigo para deletar o produto
   $cod_liv = $_GET["cod_liv"];

   $del = "delete from  tb_livro  where cod_liv = ". $cod_liv;

   mysqli_query($banco, $del);
 


?>
</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>