<?php

class Paiement
{

    public string $modePaiement;
    public commande $commande_id;

    public function __construct(

        string $modePaiement,

    ) {

        $this->modePaiement = $modePaiement;

    }
}