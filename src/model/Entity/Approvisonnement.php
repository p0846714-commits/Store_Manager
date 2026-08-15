<?php

class Approvisionnement
{
    public int $id;
    public float $montantTotal;
    public int $fournisseur_id;

    public function __construct(
        float $montantTotal,
        int $fournisseur_id,
        int $id = 0
    ) {
        $this->id = $id;
        $this->montantTotal = $montantTotal;
        $this->fournisseur_id = $fournisseur_id;
    }
}