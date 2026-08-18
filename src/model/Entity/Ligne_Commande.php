<?php

class Ligne_Commande
{
    public int $quantite;
    public int $commande_id;
    public int $produit_id;

    public function __construct(

        int $quantite,
        int $commande_id,
        int $produit_id

    ) {

        $this->quantite = $quantite;
        $this->commande_id = $commande_id;
        $this->produit_id = $produit_id;

    }
}