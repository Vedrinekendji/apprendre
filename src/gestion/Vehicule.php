<?php
namespace Src\Gestion;

use DateTime;
use DOTNET;

abstract class Vehicule{
    protected  string $marque;
    protected string $model;
    protected int $annee;
    public function __construct(string $marque, string $model,int $annee){
        $this->marque = $marque;
        $this->model = $model;
        $this->annee = $annee;
    }
    abstract public function getDetails();
    public function rouler(){
        return"la voiture roule";
    }
}