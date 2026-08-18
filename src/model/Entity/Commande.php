<?php

class Commande
{

    public string $nom;
    public float $montantTotal;
    public  client $client_id;

    public function __construct(
        
        string $nom,
        float $montantTotal,

    ) {

        $this->nom = $nom;
        $this->montantTotal = $montantTotal;

    }
}
