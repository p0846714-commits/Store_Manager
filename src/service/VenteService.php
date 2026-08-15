<?php


class VenteService 
{

    public array $panier;

    public function __construct()
    {

        $this->panier=[];

    }

    public function AjouterPanier(string $produit,int $quantite):void{

    $this-> panier[]=[

    'produit' => $produit,
    'quantite' => $quantite

    ];

    }

    public function getPanier():array{

       return  $this->panier;

    }

    
}

$VenteService = new VenteService();
$VenteService-> AjouterPanier('produit',15); 