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
                      $sql = " SELECT cod_liv, titulo_liv, valor_liv FROM TB_LIVRO ";
                       // EXECUTAR
                       //$resp =  mysqli_query($banco, $sql);
                       ## Passar para Programação Objeto
                             $resp =   $POO->query($sql);
                            // mysqli_fetch_array($resp)
                       while( $tabela = $resp->fetch_array()  ){
                          echo "<tr>
                                 <th scope='row'>".$tabela["cod_liv"]."</th>
                                 <td>".$tabela["titulo_liv"]."</td>
                                 <td>R$  ".number_format($tabela["valor_liv"], 2, ",",".")."</td> 
                                 <td>
                                     <a href='altLivro.php?cod_liv=".$tabela["cod_liv"]."'> 
                                       <img src='img/edit.png' width='32' title='Editar'></a> |
                                     
                                       <a href='delLivro.php?cod_liv=".$tabela["cod_liv"]."'> 
                                      <img src='img/delete.png' width='32' title='Deletar'></a>
                                 </td>  
                               </tr>";
                       
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

<?php
 //mysqli_close($banco);

 $POO->close();
?>