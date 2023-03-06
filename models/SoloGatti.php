<?php

require_once __DIR__.'/Prodotti.php';

class SoloGatti extends ProdottiGenerici {

    public $ciao1;
    public $ciao2;

    function __construct($prezzo, $quantità, $tipologia, $novità, $scontato, $ciao1, $ciao2)
    {
        parent::__construct($prezzo, $quantità, $tipologia, $novità, $scontato, $ciao1, $ciao2);

        $this->ciao1 = $ciao1;
        $this->ciao2 = $ciao2;
    }
}