<?php
include("Pessoa_.php");

// objeto ou instância
//$pes01 = new Pessoa_();

$pes01 = new Pessoa_( 001,
                      "Isac",
                      "12.121.213-1", 
                      "12.121.213-1",
                      "Masculino",
                      "29/09/2004",
                      "Branco",
                      "Av. Ipanema, 556 - São Bento - Sorocaba-SP",
                      "Brasileira",
                      "Estudante");

 // atribuir um valor 
 //$pes01->cpf = "12121212";
 $pes01->setCPF("12345678");

 // Exibir os valores


 echo "Cod : " .  $pes01->id  ."<br>"; 
 echo "Nome : " . $pes01->nome  ."<br>"; 
 echo "Rg : " . $pes01->rg  ."<br>"; 
  echo "CPF : " . $pes01->getCPF();  ."<br>"; 
 echo "Sexo : " . $pes01->sexo  ."<br>"; 
 echo "Data Nasc : " . $pes01->dataNasc  ."<br>"; 
 echo "Etnia : " . $pes01->etnia  ."<br>"; 
 echo "endereço : " . $pes01->endereco  ."<br>"; 
 echo "Nacionalidade : " . $pes01->nacionalidade ."<br>";
 echo "Ocupação : " . $pes01->ocupacao ."<br>";

