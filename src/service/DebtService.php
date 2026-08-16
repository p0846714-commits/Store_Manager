<?php

require_once dirname(__DIR__) . "/model/Methode/DetteRepository.php";

class DebtService
{
    public DetteRepository $detteRepository;

    public function __construct(PDO $pdo)
    {
        $this->detteRepository = new DetteRepository($pdo);
    }

    public function getDettes()
    {
        return $this->detteRepository->getAllDette();
    }
}