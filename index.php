<?php

abstract class Funcionario
{

    public $nome;
    public $salario;
   
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

    public function getSalario(){
        return $this->salario;
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

$gerente= new Gerente();
$gerente->setNome("Luma");
$gerente->setSalario(500);

$secretaria= new Secretaria();
$secretaria->setNome("Luma K");
$secretaria->setSalario(400);

?>