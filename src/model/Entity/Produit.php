<?php

class Produit
{
    public string $nom;
    public float $prix;
    public int $quantite;

    public function __construct(

        string $nom,
        float $prix,
        int $quantite

    ) {

        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;

    }
}

