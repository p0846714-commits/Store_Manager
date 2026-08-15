<?php

class ProduitRepository
{

    public PDO $pdo;
    function __construct(PDO $pdo)
    {
        $this-> pdo =$pdo;
    }

    public function getAllProduit(){
        $sql="

                SELECT* FROM produit;
        ";

        $stml=$this->pdo->prepare($sql);
        $stml->execute();

        return $stml->fetchAll(PDO::FETCH_ASSOC);

    }
    
}