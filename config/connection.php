<?php

class Connection
{
    public static function connect()
    {
        try {

            $host = "localhost";
            $database = "bdDocumentsUploader";
            $user = "root";
            $password = "";

            //$conexao = new PDO("TIPO_BANCO:host=SERVIDOR;dbname=NOME_BANCO", "USUARIO", "SENHA"); 
            $connection = new PDO("mysql:host=$host;dbname=$database;charset=utf8, $user, $password");
            
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $connection;
        } catch (PDOException $e) {

            //Kill the connection with error message
            die("Error in connection with database: " . $e->getMessage());
        }
    }
}
