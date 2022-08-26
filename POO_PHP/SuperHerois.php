<?php
include("heranca.php");

// objeto 
$SuperHomem = new Revista(["Azul","Vermelho","Amarelo","Branco"]);
$SuperHomem->titulo = "Criptonita e  seu rival Lex Luthor ";
$SuperHomem->qtdpag = "50 página";
$SuperHomem->personagens =["Lex", "Clark Kent","Lois Lane"];
$SuperHomem->valor = 10.00;
//$SuperHomem->cores = ["Azul","Vermelho","Amarelo","Branco"];

echo "<H1>Revista em HQ</H1>";
echo "<p> Revista: " . $SuperHomem->titulo ."</p>";
echo "<p> Quantidade: " . $SuperHomem->qtdpag ."</p>";
echo "<p> Personagem(s) : 
         <ul>       ";
      foreach ($SuperHomem->personagens as $key => $value) {
           echo "<li>".  $value. "</li>";      }

 echo "  </ul> </p>";
echo "<p>valor:". number_format($SuperHomem->valor,2,",").  "  </p>";



echo "<ul>";

foreach ($SuperHomem->cores as $key => $value) {
     echo "<li>".  $value. "</li>";
}
echo "  </ul>"  ;

$desc = 50;
echo "<p> desconta dado $desc e valor final da livro : ".

$SuperHomem->descVenda($desc ).
 "</p>";

?>