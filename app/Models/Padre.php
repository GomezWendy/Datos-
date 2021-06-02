<?php

namespace App\Models;

include_once 'interfaz.php';

class Padre implements interfaz {
    public $title;
    public $description;
    public $visible;
    public $experiencia;

    public function __construct($title,$description){
      $this->title = $title;
      $this->description = $description;
  }

  public function setTitle($titulo){
      $this->title = $titulo;
      if($titulo == ' '){
          $this -> title = 'N/A';
      }else{
          $this -> title = $titulo;
      }
  }
  
  public function getTitle(){
      return $this->title;
  }

  public function getConversion(){
      $years = floor($this->experiencia / 12);
      $modulo = $this->experiencia % 12;
      return "$years años $modulo meses";
  }

  public function getDescription(){
      return $this -> description;
  }
}
