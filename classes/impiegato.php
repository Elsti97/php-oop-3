<?php

include_once __DIR__ . '/../trait/anno.php';

class impiegato{
  public $nomeImpiegato;

    public $nome;
    public $cognome;
    public $livello;

    use Anno;

    public function __construct($nome, $cognome, $livello)
    {
      $this->nome = $nome;
      $this->cognome = $cognome;
      $this->livello = $livello;
    }
}

?>