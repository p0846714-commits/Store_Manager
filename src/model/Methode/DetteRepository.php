<?php


class DetteRepository 
{
    public PDO $pdo;

    function __construct(PDO $pdo)
    {
        $this-> pdo = $pdo;
    }

    public function getAllDette(){
    $sql="

        SELECT * FROM Dette;

    ";
        $stml=$this -> pdo -> prepare($sql);
        $stml -> execute();
        return $stml -> fetchall(PDO::FETCH_ASSOC);
    }
}
