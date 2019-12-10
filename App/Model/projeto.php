<?php
namespace App\Model;

class Projeto
{
    //campo atividade é descrição de atividade
    private $id, $nome, $atividade;


    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getAtividade()
    {
        return $this->atividade;
    }
    public function setAtividade($atividade)
    {
        $this->atividade = $atividade;
    }
}

?>