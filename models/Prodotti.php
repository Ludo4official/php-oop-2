<?php

require_once __DIR__.'/Categoria.php';
require_once __DIR__.'/traits/Peso.php';


class ProdottiGenerici {
    use Peso;
    
    public $prezzo;
    public $quantità;
    public $categoria;
    public $immagine;
    public $nome;

    public function __construct($prezzo, $quantità, Categoria $categoria, $immagine, $nome) {
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
        $this->categoria = $categoria;
        $this->immagine = $immagine;
        $this->nome = $nome;
    }
}
