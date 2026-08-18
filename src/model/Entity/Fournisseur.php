<?php

class Fournisseur
{
    public string $nom;
    public string $prenom;
    public string $telephone;
    public string $email;

    public function __construct(

        string $nom,
        string $prenom,
        string $telephone,
        string $email,

    ) {

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->email = $email;

    }
}