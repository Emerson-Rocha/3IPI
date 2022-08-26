<?php
 include ("Livros.php");
   /*
   iremos fazer algo tenha alguma caracteristica de livro
   mas não é livro tias como (revista,artigo ....)
 */
   class Revista extends Livros{


    private $personagens ;
    protected $cores ;

//  função de construtor
//  sobrescreve o metodo herdado
   public function __construct($coresx){
     $this->cores = $coresx;
   }
      
    
       public function __set($atributo, $valor){
           $this->$atributo = $valor;
       }

       public function __get($atributo){
           return $this->$atributo;
       }
   }


?>