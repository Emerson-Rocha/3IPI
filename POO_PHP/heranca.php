<?php
 include ("Livros.php");
   /*
   iremos fazer algo tenha alguma caracteristica de livro
   mas não é livro tias como (revista,artigo ....)
 */
   class Revista extends Livros{
       private personagens ; // array

       public function __set($atributo, $valor){
           $this->$atributo = $valor;
       }
   }


?>