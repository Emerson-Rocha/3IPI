<?php
 // trazer o classe
include ("Livros.php");

// objeto

$livro_01  = new Livros();

// ler e exibir
$livro_01->titulo = "PHP POO";
$livro_01->anoP = "2016";
$livro_01->qtdpag = "1200 pag";
$livro_01->editora = "Novatec";
$livro_01->sumario = array ( 
                        [ '1 -> Introdução ... 2 pg',   
                           '1.1 instalação ... 3 pg',
                           '1.2 sintaxe    ... 4 pg' 
                         ],
                         [ '2 -> Condicional ... 5 pg',   
                           '2.1  if          ... 6 pg',
                           '2.2 sintaxe       ... 7 pg' 
                       ]
                  
                        );

$livro_01->capitulo = [ 

     "capitulo 1 ",
     "capitulo 2 ",
     "capitulo 3 ",
     "capitulo 4 "
];

$livro_01->capa ="img/01.png";

 // exibir
  echo "Titulo " .  $livro_01->titulo;
  // print_r($livro_01->sumario);
 echo "Sumario ";
  for($i = 0 ;$i <= 1; $i++){
   for($j = 0 ;$j <= 1; $j++){
       echo "<br>". $livro_01->sumario[$i][$j];
   }
}

 echo $livro_01->anoP  ."<br>";
 echo $livro_01->qtdpag  ."<br>";
 echo $livro_01->editora   ."<br>";
 echo "Capitulo : <br>";
  foreach ($livro_01->capitulo as $key => $value) {
       echo "<br>" .$value;
  }   
   
  echo "<img src='". $livro_01->capa."' 
  witdh='200' height='200'>";



?>