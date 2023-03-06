<?php

class ProdottiGenerici {
    public $prezzo;
    public $quantità;
    public $tipologia;
    public $novità;
    public $scontato;

    public function __construct($prezzo, $quantità, $tipologia, $novità, $scontato) {
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
        $this->tipologia = $tipologia;
        $this->novità = $novità;
        $this->scontato = $scontato;
    }
}
