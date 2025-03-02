<?php
namespace Biblio;

use DateTime;

class Livre{
    private string $name;
    private  DateTime $annee_pub;
    private string $auteur;
    public function __construct( string $name, DateTime $annee_pub, string $auteur){
        $this->name = $name;
        $this->annee_pub = $annee_pub;
        $this->auteur = $auteur;
    }
    public function getName(): string{
        return $this->name;
    }
    public function getAnnee_pub(): DateTime{
        return $this->annee_pub;
    }

    public function __tostring(){
        return"Name:". $this->name .",Annne pub:". $this->annee_pub->format('Y').",Auteur:" .$this->auteur;
    }
}