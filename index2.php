<?php

class Mamifero{
    public function __construct($nome, $idade, $peso){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso; 
    }

}

$cachorro = new Mamifero("Sansão", 12,45);
print_r($cachorro);

class Aluno{
    public $nome = "Maria";
    private $idade = 25;

    public function nome(){    
        echo "Seu nome: ".$this->nome;
    }

    public function idade(){
        echo "Sua idade: ".$this->idade;
    }

    public function getIdade(){
        
    }

}
$aluno =  new Aluno();
$aluno->nome();
echo "<br/>";
$aluno->idade();
echo "<br/>";

?>