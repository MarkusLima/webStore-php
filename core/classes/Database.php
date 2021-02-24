<?php

namespace core\classes;

use Exception;
use PDO;
use PDOException;

class Database
{
    private $ligacao;

    private function ligar()
    {
        //ligar a base de dados
        $this->ligacao = new PDO(
            'mysql:' .
                'host=' . MYSQL_SERVER . ';' .
                'dbname=' . MYSQL_DATABASE . ';' .
                'charset=' . MYSQL_CHARSET,
            MYSQL_USER,
            MYSQL_PASS,
            array(PDO::ATTR_PERSISTENT => true)
        );
        //debug
        $this->ligacao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    private function desligar()
    {
        //desliga da base de dados
        $this->ligacao = null;
    }

    public function read($sql, $params = null)
    {
        $sql = trim($sql);
        //verifica se e uma ligacao select
        if (!preg_match("/^SELECT/i", $sql)) {
            throw new Exception('Base de dados - Não é uma intrucao SELECT,');
        }
        //liga ao BD
        $this->ligar();
        $response = null;

        try {
            //conexao com o BD
            if (!empty($params)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($params);
                $response = $executar->fetchAll(PDO::FETCH_CLASS);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
                // print_r($params);
                // die();
                $response = $executar->fetchAll(PDO::FETCH_CLASS);
            }
        } catch (PDOException $e) {
            return $e;
        }

        //Desliga o BD
        $this->desligar();

        //Devolve o resultado
        return $response;
    }

    public function create($sql, $params = null)
    {
        $sql = trim($sql);
        if (!preg_match("/^INSERT/i", $sql)) {
            throw new Exception('Base de dados - Não é uma intrucao INSERT,');
        }

        //liga ao BD
        $this->ligar();

        try {
            //conexao com o BD
            if (!empty($params)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($params);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
            }
        } catch (PDOException $e) {
            return $e;
        }

        //Desliga o BD
        $this->desligar();
    }


    public function update($sql, $params = null)
    {
        $sql = trim($sql);
        if (!preg_match("/^UPDATE/i", $sql)) {
            throw new Exception('Base de dados - Não é uma intrucao UPDATE,');
        }

        //liga ao BD
        $this->ligar();

        try {
            //conexao com o BD
            if (!empty($params)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($params);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
            }
        } catch (PDOException $e) {
            return $e;
        }

        //Desliga o BD
        $this->desligar();
    }

    public function delete($sql, $params = null)
    {
        $sql = trim($sql);
        if (!preg_match("/^DELETE/i", $sql)) {
            throw new Exception('Base de dados - Não é uma intrucao DELETE,');
        }

        //liga ao BD
        $this->ligar();

        try {
            //conexao com o BD
            if (!empty($params)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($params);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
            }
        } catch (PDOException $e) {
            return $e;
        }

        //Desliga o BD
        $this->desligar();
    }

    public function search($sql, $params = null)
    {
        $sql = trim($sql);
        if (!preg_match("/^INSERT/i", $sql)) {
            throw new Exception('Base de dados - Não é uma intrucao INSERT,');
        }

        //liga ao BD
        $this->ligar();
        $response = null;

        try {
            //conexao com o BD
            if (!empty($params)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($params);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
            }
        } catch (PDOException $e) {
            return $e;
        }

        //Desliga o BD
        $this->desligar();

        //Devolve o resultado
        return $response;
    }

    // Generica----------------------------------------------------------
    public function statement($sql, $params = null)
    {
        $sql = trim($sql);
        if (preg_match("/^(SELECT|INSERT|UPDATE|DELETE)/i", $sql)) {
            throw new Exception('Base de dados - Intrucao invalida,');
        }

        //liga ao BD
        $this->ligar();
        $response = null;

        try {
            //conexao com o BD
            if (!empty($params)) {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute($params);
            } else {
                $executar = $this->ligacao->prepare($sql);
                $executar->execute();
            }
        } catch (PDOException $e) {
            return $e;
        }

        //Desliga o BD
        $this->desligar();

        //Devolve o resultado
        return $response;
    }
}
