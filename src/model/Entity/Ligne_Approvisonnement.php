<?php

class Ligne_Approvisionnement
{
    public float $prix;
    public int $quantite;
    public approvisionnement $approvisionnement_id;
    public produit $produit_id;

    public function __construct(

        float $prix,
       

    ) {
        $this->prix = $prix;
       
    }
}