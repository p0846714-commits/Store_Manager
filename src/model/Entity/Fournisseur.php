<?php

class Fournisseur
{
    public int $id;
    public string $nom;
    public string $prenom;
    public string $telephone;
    public string $email;

    public function __construct(
        string $nom,
        string $prenom,
        string $telephone,
        string $email,
        int $id = 0
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
        $this->email = $email;
    }
}