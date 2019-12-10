<?php
namespace App\Model;

class Atividade
{
    //campo projeto é descrição de projeto relacionado a atividade
    private $id, $nome, $projeto;


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
    public function getProjeto()
    {
        return $this->projeto;
    }
    public function setProjeto($projeto)
    {
        $this->projeto = $projeto;
    }
}