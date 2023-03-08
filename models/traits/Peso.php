<?php

trait Peso {
    public $peso;

    public function __construct ($prezzo, $quantità, Categoria $categoria, $immagine, $nome, $scadenza, $peso) {

        parent::__construct($prezzo, $quantità, $categoria, $immagine, $nome, $scadenza);
        $this->peso = $peso;

    }

}