<?php

class Ligne_Approvisionnement
{
    public int $id;
    public float $prix;
    public int $quantite;
    public int $approvisionnement_id;
    public int $produit_id;

    public function __construct(
        float $prix,
        int $quantite,
        int $approvisionnement_id,
        int $produit_id,
        int $id = 0
    ) {
        $this->id = $id;
        $this->prix = $prix;
        $this->quantite = $quantite;
        $this->approvisionnement_id = $approvisionnement_id;
        $this->produit_id = $produit_id;
    }
}