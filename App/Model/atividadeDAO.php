<?php

namespace App\Model;

class AtividadeDAO
{
    public function create(Atividade $a)
    {
        $sql = 'INSERT INTO projetos VALUES (?,?,?)';

        $exc_data = Conexao::getConexao()->prepare($sql);
        $exc_data->bindValue(1, $a->getId());
        $exc_data->bindValue(2, $a->getNome());
        $exc_data->bindValue(3, $a->getAtividade());

        $exc_data->execute();

    }
    public function read()
    {
        $sql = 'SELECT * FROM  atividades';
        $exc_data = Conexao::getConexao()->prepare($sql);

        $exc_data->execute();

        if($exc_data->rowCount() > 0)
        {
            $result = $exc_data->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        return [];

    }
    public function update(Atividades $a)
    {
        $sql = 'UPDATE atividades set atividade_name = ?, projeto_id = ? WHERE id = ?';

        $exc_data = Conexao::getConexao()->prepare($sql);
        $exc_data->bindValue(1, $a->getNome());
        $exc_data->bindValue(2, $a->getAtividade());
        $exc_data->bindValue(3, $a->getId());

        $exc_data->execute();

    }
    public function delete($id)
    {
        $sql = 'DELETE FROM atividades WHERE id = ?';

        $exc_data = Conexao::getConexao()->prepare($sql);
        $exc_data->bindValue(1, $p->getId());
        
        $exc_data->execute();

    }
    
    
}
?>