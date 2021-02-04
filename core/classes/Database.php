<?php

namespace core\classes;

class Database
{
    private $ligacao;

    private function ligar(){
        //ligar a base de dados
        $this->ligacao = new PDO(
           'mysql:'.
           'host='.MYSQL_SERVER.';'.
           'dbname='.MYSQL_DATABASE.';'.
           'charset='.MYSQL_CHARSET,
           MYSQL_USER,
           MYSQL_PASS,
           array(PDO::ATTR_PERSISTENT => true)
        );
        $this->ligacao->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    private function desligar(){
        //desliga da base de dados
        $this->ligacao = null;
    }

    public function read($sql, $params = null)
    {
        //liga ao BD
        $this->ligar();
        $response = null;

        try {
            //conexao com o BD
            if(empty($params)){
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($params);
                $response = $executar->fetchAll(PDO::FETCH_CLASS);
            }else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                $response = $executar->fetchAll(PDO::FETCH_CLASS);
            }

        } catch (PDOException $e) {
            return false;
        }
        
        //Desliga o BD
        $this->desligar();

        //Devolve o resultado
        return $response;

    }

    public function create()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function search()
    {

    }
}
