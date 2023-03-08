<?php

require_once __DIR__.'/Prodotti.php';

class Cuccia extends ProdottiGenerici {
    public $dimensione;

    function __construct($prezzo, $quantità, Categoria $categoria, $immagine, $nome, $dimensione) {
        parent::__construct($prezzo, $quantità, $categoria, $immagine, $nome);
        $this->dimensione = $dimensione;
    }
}