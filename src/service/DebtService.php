<?php

require_once dirname(__DIR__) . "/model/Methode/DetteRepository.php";

class DebtService
{
    private DetteRepository $detteRepository;



     function __construct(PDO $pdo)
    {
        $this->detteRepository = new DetteRepository($pdo);
    }

    public static function getDettes()
    {
        return getAllDette();
    }
}