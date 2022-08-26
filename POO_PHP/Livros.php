<?php
/*
   itens que um livro tem:

   - capa
   - sumario
   - qtd de pagina
   - capitulo
   - genero
   - autor(s)
   - ano de publicação
   - quantidade de impressão
   - editora
   - isbn
   - titulo


*/

class Livros{
 // atributos private
   private $titulo;
   private $anoP;
   private $qtdpag;
   private $editora;
   private $sumario ;// array
   private $capitulo; // array
   private $isbn;
   private $autor;
   private $genero;
   private $capa; // caminha da imagem c://
   private $qtdImp;
   protected $valor = 100;

   // construtor
   public function __construct(){}
   
   // metodos de leitura e escrita
//    public function setTitulo($_par){
//        $this->titulo = $_par;
//    }

//    public function getTitulo(){
//        return $this->titulo;
//    }

   public function __set($atributo , $valor){
       $this->$atributo = $valor;
   }

   public function __get($atributo){
       return $this->$atributo;
   }


   // criar um metodo de dar deconto para a venda do livro

   public function descVenda($porcentagemDesc){
    return  $this->valor  - ( ($this->valor * $porcentagemDesc) / 100 );

   }


}



///


?>