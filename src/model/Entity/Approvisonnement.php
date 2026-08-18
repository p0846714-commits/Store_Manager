<?php

class Approvisionnement
{
    public float $montantTotal;
    public  fournisseur $fournisseur_id;

    public function __construct(
        
        float $montantTotal,

    ) {
        $this->montantTotal = $montantTotal;
    }
}






