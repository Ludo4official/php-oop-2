<?php

require_once __DIR__.'/Prodotti.php';

class Gioco extends ProdottiGenerici {
    public $materiale;

    function __construct($prezzo, $quantità, Categoria $categoria, $immagine, $nome, $materiale) {
        parent::__construct($prezzo, $quantità, $categoria, $immagine, $nome);
        $this->materiale = $materiale;
    }
}