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
// caminho do servidor

include_once("../servidor.php");

// pegar a variavel
 $cod_liv = $_GET["cod_liv"];


// sql deleta
$delSQL = "delete from tb_livro ";
$delSQL .=" where cod_liv = ".$cod_liv;


//echo $delSQL;


// executa
 mysqli_query($link,$delSQL);


 // mysqli_affected_rows - Obtém o número de linhas afetadas em uma operação MySQL anterior
 if ( mysqli_affected_rows($link) == 1){
      echo "Deletado com sucesso !";
      
 }
 else{

    echo mysqli_error($link);
 }

 //echo "<br><a href='lista_livro.php'>voltar</a>";
mysqli_close($link);

?>
</body>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>