<?php
// vincular os arquivos
include("Veiculo.php");
//include_once("Veiculo.php");
//require("Veiculo.php");
//require_once("Veiculo.php");

// objeto/ instancia
$moto = new Veiculo();
echo "CÓDIGO : " .$moto->id= "002";
echo "<br>";
echo "FABRICANTE : " .$moto->fabricante= "Yamaha";
echo "<br>";
echo "MODELO : ".$moto->modelo = "MT600";
echo "<br>";
echo "TIPO : ".$moto->tipo = "MOTO";
echo "<br>";
echo "ANO DE FABRICAÇÃO : " .$moto->ano_fab = "2021";
echo "<br>";
echo "ANO DE MODELO : " .$moto->ano_mod = "2022";
echo "<br>";
echo "COR : " .$moto->cor = "PRETA";
echo "<br>";
echo "COMBUSTIVEL : " .$moto->combustivel = "FLEX";
echo "<br>";
$moto->Destino("Sorocaba", "ADRIANOPOLIS");
echo "<br>";
echo $moto->Consumo();




?>