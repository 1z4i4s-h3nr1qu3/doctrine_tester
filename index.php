<?php

require_once 'vendor/autoload.php';

$p = new \App\Model\Projeto();

$p->setId(1);
$p->setNome("teste");
$p->setAtividade(1);

$prodDao = new \App\Model\ProjetosDAO();

$prodDao->create($p);

//TESTES ISOLADOS DE CADA FUNÇÃO

//$p = new \App\Model\Projeto();
//
//$p->setId(1);
//$p->setNome("teste");
//$p->setAtividade(1);
//
//$prodDao = new \App\Model\ProjetosDAO();
//
//$prodDao->read($p);
//
//$p = new \App\Model\Projeto();
//
//$p->setId(1);
//$p->setNome("teste");
//$p->setAtividade(1);
//
//$prodDao = new \App\Model\ProjetosDAO();
//
//$prodDao->update($p);
//
//$p = new \App\Model\Projeto();
//
//$p->setId(1);
//$p->setNome("teste");
//$p->setAtividade(1);
//
//$prodDao = new \App\Model\ProjetosDAO();
//
//$prodDao->delete($p);


?>