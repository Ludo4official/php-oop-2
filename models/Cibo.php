<?php

require_once __DIR__.'/Prodotti.php';

class Cibo extends ProdottiGenerici {
    public $scadenza;

    function __construct($prezzo, $quantità, Categoria $categoria, $immagine, $nome, $scadenza) {
        parent::__construct($prezzo, $quantità, $categoria, $immagine, $nome);
        $this->scadenza = $scadenza;
    }
}