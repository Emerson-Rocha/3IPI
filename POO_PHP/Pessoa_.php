<?php
  class Pessoa_{
      // visibilidade <> atributos
   public $id;
   public $nome;
   public $rg;
   private $cpf;
   public $sexo;
   public $dataNasc;
   public $etnia;
   public $endereco;
   public $nacionalidade;
   public $ocupacao;
   // Construtor

   function __construct(
           $idC,
           $nomeC,
           $rgC,
          
           $sexoC,
           $dataNascC,
           $etniaC,
           $enderecoC,
           $nacionalidadeC,
           $ocupacaoC){

    $this->id = $idC; 
    $this->nome = $nomeC;
    $this->rg = $rgC; 
   
    $this->dataNasc = $dataNascC;
    $this->sexo = $sexoC;
    $this->etnia = $etniaC;
    $this->endereco = $enderecoC;
    $this->nacionalidade = $nacionalidadeC;
    $this->ocupacao = $ocupacaoC;

   }
   // Metodos
    //metodo para atribuir a propriedade cpf

    public function setCPF($_param){
      $this->cpf = $_param;
    }
   // metodo para exibir o propriedade cpf
   public function getCPF(){
    return $this->cpf;
   }


  }


?>