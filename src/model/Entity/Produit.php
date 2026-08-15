<?php

class Produit
{
    public int $id;
    public string $nom;
    public float $prix;
    public int $quantite;

    public function __construct(
        string $nom,
        float $prix,
        int $quantite,
        int $id = 0
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->quantite = $quantite;
    }
}

