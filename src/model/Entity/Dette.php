<?php

class Dette
{
    public client $client_id;
    public int $montant;

    public function __construct(

        int $montant

    ) {

    $this -> montant = $montant;


    }
}