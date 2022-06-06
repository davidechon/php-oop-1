<?php
class Movie{
  protected $titolo;
  protected $regista;
  protected $attori;
  protected $trama;
  protected $locandina;

  function __constructor($_titolo, $_regista, $_attori){
    $this->titolo = $_titolo;
    $this->regista = $_regista;
    $this->attori = $_attori;
  }
  
  public function getTitolo(){
    return $this->titolo;
  }
  public function getRegista(){
    return $this->regista;
  }
  public function getAttori(){
    return $this->attori;
  }

  }

?>