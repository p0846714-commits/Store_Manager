<?php

class ClientRepository
{

    public PDO $pdo;
    function __construct(PDO $pdo)
    {
        $this-> pdo =$pdo;
    }

    public function getAllClient(){
        $sql="

                SELECT* FROM client;
        ";

        $stml=$this->pdo->prepare($sql);
        $stml->execute();

        return $stml->fetchAll(PDO::FETCH_ASSOC);

    }
    
}