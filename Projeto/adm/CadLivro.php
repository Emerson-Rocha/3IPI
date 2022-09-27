<?php
// sessão
session_start();

include("../servidor.php");

// variveis do formulário

$titulo = $_POST["titulo"];
$desc = $_POST["desc"];
$valor = $_POST["valor"];
$cod_ed = $_POST["ed"];
$imagem = $_FILES["arq"];

// caminho da imagem 

$dir = "img/" .$imagem["name"];

// inserindo valor no banco

$sql = " insert into tb_livro(cod_ed, titulo_liv, desc_liv, img_liv, valor_liv) ";
$sql .= " values($cod_ed, '$titulo', '$desc', '$dir' , '$valor') ";


// executar

   $res  = mysqli_query($banco, $sql);

   // preciso saber se foi insirida no banco 


  if(mysqli_affected_rows($banco) ){
     echo "<script type='text/javascript'> 
             alert('cadastro feito!!!');
           </script>";
        
           // mover par a pasta img

           move_uploaded_file( $imagem["tmp_name"], $dir);


           //pegar o id registrado automaticamente 

           $cod_liv = mysqli_insert_id($banco);

           // inserir na tabela cad_liv

           $sql = " INSERT INTO TB_CAD_LIVRO 
              VALUES(".$_SESSION['login']['id'] .", " . $cod_liv." )";

             //executar
             
             mysqli_query($banco , $sql);
             // DIRECIONAR PARA O MENU
            // header('location:menu.php');   

  }



?>