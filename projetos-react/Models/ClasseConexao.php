<?php

class Connection
{
    public static function conectaDb()
    {                  
        $conn = new PDO("mysql:host=localhost;dbname=fullstackeletro;charset=utf8",
        "root",
        ""   
        ); 

        if($conn){
            return $conn;
        }else{
            return "<h1>Erro ao realizar conexão</h1>";
        }
    }
}

