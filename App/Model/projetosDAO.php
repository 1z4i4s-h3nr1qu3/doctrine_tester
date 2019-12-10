<?php

namespace App\Model;

class ProjetosDAO
{
    public function create(Projetos $p)
    {
        $sql = 'INSERT INTO projetos VALUES (?,?,?)';

        $exc_data = Conexao::getConexao()->prepare($sql);
        $exc_data->bindValue(1, $p->getId());
        $exc_data->bindValue(2, $p->getNome());
        $exc_data->bindValue(3, $p->getAtividade());

        $exc_data->execute();

    }
    public function read()
    {
        $sql = 'SELECT * FROM  projetos';
        $exc_data = Conexao::getConexao()->prepare($sql);

        $exc_data->execute();

        if($exc_data->rowCount() > 0)
        {
            $result = $exc_data->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }

        return [];

    }
    public function update(Projetos $p)
    {
        $sql = 'UPDATE projetos set projeto_name = ?, atividade_id = ? WHERE id = ?';

        $exc_data = Conexao::getConexao()->prepare($sql);
        $exc_data->bindValue(1, $p->getNome());
        $exc_data->bindValue(2, $p->getAtividade());
        $exc_data->bindValue(3, $p->getId());

        $exc_data->execute();

    }
    public function delete($codigo)
    {
        $sql = 'DELETE FROM projetos WHERE id = ?';

        $exc_data = Conexao::getConexao()->prepare($sql);
        $exc_data->bindValue(1, $p->getId());
        
        $exc_data->execute();

    }
    
    
}
?>