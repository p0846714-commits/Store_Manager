<?php

class Paiement
{
    public int $id;
    public string $modePaiement;
    public int $commande_id;

    public function __construct(
        string $modePaiement,
        int $commande_id,
        int $id = 0
    ) {
        $this->id = $id;
        $this->modePaiement = $modePaiement;
        $this->commande_id = $commande_id;
    }
}