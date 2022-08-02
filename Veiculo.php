<?php 
/* Introdução a Programação a 
   Orientado a Objeto com PHP

   obs: lembrando que o php
   não é uma linguagem totalmente
   tipado, os conseito P.O.O 
   pode  se comportada diferente algumas
   linguagem (java, c#, c...)

  

*/




class Veiculo{ 
   // visibilidade
      // public
      // protected
      // private
  
    // iremos adicinar propriedades(variavel)
    public $id ;
    public $fabricante;
    public $modelo;
    public $tipo;
    public $ano_fab;
    public $ano_mod;
    public $cor;
    public $combustivel;
    
    //iremos adicionar Métodos(Função)
    
     public function Destino( $partida, $chegada){
            echo "Destino " .$chegada .", origem ". $partida;

     }

     public function Consumo(){
         echo "gasto por km " ;
     }

 }// fim de classe


 // IREMOS CRIAR UM OBJETO/ INSTANCIA DE UMA CLASSE(BASE);
/*

 $obj01 = new Veiculo(); //
//Algumas linguagens usa ponto(.) para ter acesso as campos/atributos
// e metodos, porem o php usa seta (->)
// acessar o campo $id/ atribuir
echo "CÓDIGO : " . $obj01->id= 001;
echo "<br>";
echo "FABRICANTE : " . $obj01->fabricante= "Ford";
echo "<br>";
echo "MODELO : ".$obj01->modelo = "Ranger ";
echo "<br>";
echo "TIPO : ". $obj01->tipo = "Carro";
echo "<br>";
echo "ANO DE FABRICAÇÃO : " .$obj01->ano_fab = "2021";
echo "<br>";
echo "ANO DE MODELO : " .$obj01->ano_mod = "2022";
echo "<br>";
echo "COR : " . $obj01->cor = "Rosa";
echo "<br>";
echo "COMBUSTIVEL : " . $obj01->combustivel = "Diesel";
echo "<br>";
$obj01->Destino("Sorocaba", "Parana");
echo "<br>";
echo  $obj01->Consumo();

*/







// mostra o valor na tela
//echo $obj01->id;
