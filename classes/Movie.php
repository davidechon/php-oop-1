<?php
class Movie{
  protected $titolo;
  protected $regista;
  protected $attori;
  protected $trama;
  protected $locandina;

  function __construct($_titolo, $_regista, $_attori, $_trama, $_locandina){
    $this->titolo = $_titolo;
    $this->regista = $_regista;
    $this->attori = $_attori;
    $this->trama = $_trama;
    $this->locandina = $_locandina;
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
  public function getTrama(){
    return $this->trama;
  }
  public function getLocandina(){
    return $this->locandina;
  }

  }



?>