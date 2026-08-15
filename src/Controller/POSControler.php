<?php


require_once dirname(__DIR__)."/model/Methode/ClientRepository.php";
require_once dirname(__DIR__)."/service/VenteService.php";


// require_once dirname(__DIR__)."/model/Methode/FournisseurRepository.php";
// require_once dirname(__DIR__)."/model/Methode/ProduitRepository.php";


class POSController
{

    public VenteService $VenteService;
    

    public function __construct()
    {

        $this -> VenteService = new VenteService();

    }

    public function afficher():void {

    require_once dirname(__DIR__)."/Views/POS/index.php";

}

}
