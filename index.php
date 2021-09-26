<?php

abstract class Funcionario
{

    public $nome;
    public $salario;
   
    public function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function geraBonificacao(){
        return $this->salario * 0.1;
    }

} 

class Gerente extends Funcionario
{

    function geraBonificacao(){
        $this->salario * 0.5 + 200;
    }

}

class Secretaria extends Funcionario
{

    function geraBonificacao(){
        $this->salario * 0.2 + 100;
    }
}

$gerente= new Gerente("Luma", 500);

$secretaria= new Secretaria("Luma M", 400);

?>