<?php
namespace Src\Gestion;

use DateTime;

class Moto extends vehicule  {
   protected string $marque;
   protected string $model;
   protected int $annee;
   public function __construct( string $marque, string $model,int $annee){
      $this->marque = $marque;
      $this->model = $model;
      $this->annee = $annee;
   }
      public function getDetails(){ 
         return "Marque: $this->marque,  Model: $this->model ,Annee:$this->annee"; 
      }
      
   
}