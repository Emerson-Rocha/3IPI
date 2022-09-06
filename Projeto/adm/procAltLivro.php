<?php
session_start();
// Incluir a conexao com o servidor
include_once ("../servidor.php");

//Referência de variaveis

$tituto   = $_POST["titulo"]; 
$desc     = $_POST["desc"];
$valor    = $_POST["valor"];
$cod_ed   = $_POST["ed"];


// sql da tabela  livro e  editora
$sqlUpdate = " Update tb_livro 
               set cod_ed =  $cod_ed,
                   titulo_liv = '$tituto',
                   desc_liv = '$desc',                   
                   valor_liv = $valor 
                   where cod_liv = " . $_POST["cod_liv"]; 


 //echo $sqlUpdate  ;


// Executart e pegar o resultado  do banco de dados;
$res =  mysqli_query($link, $sqlUpdate);
 //echo mysqli_error($link);
// mysqli_affected_rows()  Retorna o número de linhas afetadas pela INSERT , UPDATE , REPLACE ou DELETE
 //echo mysqli_error($link); // saber o erro do mysql;

 if (mysqli_affected_rows($link)==1){
    echo "Alterado Livro";
    }
else{
    echo mysqli_error($link); // saber o erro do mysql;
}

//echo "<br><a href='lista_livro.php'>voltar</a>";



// fechar o conexão
mysqli_close($link);
