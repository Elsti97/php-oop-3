<?php

trait Anno{
  public $anno;

  public function getString(){
    if(get_class($this) == 'libro'){
      echo "Il libro $this->nome è stato scritto nel: $this->anno";
    } else if (get_class($this) == 'impiegato'){
      echo "L'impiegato $this->nome è stato assunto nel: $this->anno";
    }
  }
}


?>