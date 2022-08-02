<?php
require_once 'Pessoa.php';
class PessoaF extends Pessoa{
    private $cpf;
    private $rg;
    private $sexo;

    public function PessoaF() {
        
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;

        return $this;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function __toString()
    {
        $pes = "Pessoa Física: <br/>"
                . " - Nome: " . $this->getNome() . "<br/>"
                . " - Telefone: " . $this->getTelefone() . "<br/>"
                . " - Email: " . $this->getEmail() . "<br/>"
                . " - Endereco: " . $this->getEndereco() . "<br/>"
                . " - CPF: " . $this->getCpf() . "<br/>"
                . " - Rg: " . $this->getRg() . "<br/>"
                . " - Sexo: " . $this->getSexo() . "<br/>";
        return $pes;
    }
}
?>