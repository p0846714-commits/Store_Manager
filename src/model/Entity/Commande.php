<?php

class Commande
{
    public int $id;
    public string $nom;
    public float $montantTotal;
    public int $client_id;

    public function __construct(
        string $nom,
        float $montantTotal,
        int $client_id,
        int $id = 0
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->montantTotal = $montantTotal;
        $this->client_id = $client_id;
    }
}