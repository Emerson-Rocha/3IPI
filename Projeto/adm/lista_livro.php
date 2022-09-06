<?php
// caminho do servidor
include_once("../servidor.php");


?>
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
        <section class="col-md-2">
            
        </section>
        <section class="col-md-8">
            <h3 class="mt-5">Lista de Livros</h3>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Editar / DELETAR</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                  //sql lista de livros string
                  $sqlivro = "select cod_liv, titulo_liv, valor_liv from tb_livro";

                  // executar
                   $resultado = mysqli_query($link,$sqlivro);

                     while( $linha = mysqli_fetch_array($resultado)  ){  
                      echo "<tr>";
                        echo "<th scope='row'>".$linha["cod_liv"] ."</th>";
                        echo "<td>".$linha["titulo_liv"] ."</td>";
                        echo "<td>".$linha["valor_liv"] ."</td>";
                        echo "<td>
                           <a href='altLivro.php?cod_liv=".$linha["cod_liv"]."' > Alterar </a>
                           /
                           <a href='delLivro.php?cod_liv=".$linha["cod_liv"]."' > Deletar </a>
                        
                           </td>";
                      echo "</tr>";
                     }
                   
                   ?>
                    
                </tbody>
            </table>


           
        </section>
        <section class="col-md-2"></section>

    </div>

</body>
<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</html>