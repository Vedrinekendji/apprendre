<?php
namespace Biblio;

use ArrayObject;
use DateTime;

class Bibliotheque{
    private  string $nom;
    private DateTime $date_creation;

    private Array $liste_livre;
    public function __construct(string $nom, DateTime $date_creation){
        $this->nom = $nom;
        $this->date_creation = $date_creation;
        $this->liste_livre =[];
    }
     public function getNom(): string{
        return $this->nom;
    }
    public function getDatecreation(): DateTime{
        return $this->date_creation;
    }
    public function getListe_livre(): array{
        return $this->liste_livre;
    }
    public function setListe_livre(Livre $livre){
        array_push($this->liste_livre, $livre);

    }
}