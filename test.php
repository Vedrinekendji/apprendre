<?php
use App\Figure;
use App\Name;
use App\Rectangle;
use Biblio\Bibliotheque;
use Src\App;

use Src\user;
use Biblio\Livre;
use Src\Gestion\Voiture;
use Src\Gestion\Moto;


require __DIR__ ."/vendor/autoload.php";

// $app = new Rectangle(1,5);
// $perimeter= $app->perimeter();
// echo"le perimetre est: $perimeter";

//echo Name::JIORDI->value;
// $app = new App("hello\n");
// $app->greed();
// App::greed();
// $app->index();
$biblio=new Bibliotheque("jiordi",new DateTime("18-06-2004"),);
$livre=new Livre("saison",new DateTime("2025"),"princess_oruru");
$biblio->setListe_livre($livre);
foreach ($biblio->getListe_livre() as $biblio) {
    echo $livre ."\n";
}
// echo"<pre>";
// print_r($biblio->getListe_livre());
// echo "</pre>";
$moto=new Moto("ved","badja","2002");
$voiture = new Voiture("toyota ","raf","2000");
echo $moto->getDetails() ."\n";
echo $voiture->getDetails()."\n";
echo $voiture->rouler()."\n";
echo $voiture->recharger();