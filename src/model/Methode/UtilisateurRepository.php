<?php

class UtilisateurRepository 
{
    
 public PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

}
