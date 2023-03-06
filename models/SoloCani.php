<?php

require_once __DIR__.'/Prodotti.php';

class SoloCani extends ProdottiGenerici {

    public $interno;
    public $piano;

    function __construct($prezzo, $quantità, $tipologia, $novità, $scontato, $interno, $piano)
    {
        parent::__construct($prezzo, $quantità, $tipologia, $novità, $scontato);

        $this->interno = $interno;
        $this->piano = $piano;
    }
}