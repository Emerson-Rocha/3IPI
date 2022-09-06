

<?php
session_start();
// Incluir a conexao com o servidor
include_once ("../servidor.php");

//Referência de variaveis

$tituto   = $_POST["titulo"]; 
$desc     = $_POST["desc"];
$valor    = $_POST["valor"];
$cod_ed   = $_POST["ed"];

$imagem   =$_FILES["arq"];


// Peguei sem fazer tratamento
$diretorio = "img/" . $imagem ["name"]; 

// sql da tabela  livro e  editora
$sqlInsert = "insert into tb_livro(cod_ed, titulo_liv, desc_liv, img_liv, valor_liv)"; 
$sqlInsert .= " values($cod_ed, '$tituto', '$desc', '$diretorio' ,'$valor')"; 

//echo $sqlInsert ;


// Executart e pegar o resultado  do banco de dados;
$res =  mysqli_query($link, $sqlInsert);




// mysqli_affected_rows()  Retorna o número de linhas afetadas pela INSERT , UPDATE , REPLACE ou DELETE
 //echo mysqli_error($link); // saber o erro do mysql;
//echo mysqli_affected_rows($link);
 
if (mysqli_affected_rows($link)){
    echo "Cadastrado Livro";
    //mover a arquivo para o diretorio
    move_uploaded_file ( $imagem["tmp_name"] , $diretorio );

    // colcar na tabela usuario e livro para saber que adicionou 
    // pegar o id de registra que a id inserir
       $cod_liv =  mysqli_insert_id($link);

      $sqlCadlivro = "insert into tb_cad_livro values(". $_SESSION["login"]["id"]."," .$cod_liv.")";

      
      // executar
        mysqli_query($link, $sqlCadlivro);

      //echo "<br><a href='menu.php'>voltar</a>";



}
else{
    echo mysqli_error($link); // saber o erro do mysql;
}




// fechar o conexão
mysqli_close($link);
?>