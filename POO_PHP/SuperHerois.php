<?php
include("heranca.php");

// objeto 
$SuperHomem = new Revista();
$SuperHomem->titulo = "Criptonita e  seu rival Lex Luthor ";
$SuperHomem->qtdpag = "50 página";

echo "<H1>Revista em HQ</H1>";
echo "<p> Revista: " . $SuperHomem->titulo ."</p>";
echo "<p> Quantidade: " . $SuperHomem->qtdpag ."</p>";


?>