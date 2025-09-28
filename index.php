<?php 


require_once 'classes/zoo.php';
require_once 'Visiteurs/visiteur.php';
require_once 'classes/animal.php';
require_once 'classes/carnivore.php';
require_once 'classes/herbivore.php';


// zoo
$zoo = new Zoo();

// Visiteurs

$visiteur = new Visiteurs("Terminator ");
$zoo->payerEmployes($visiteur);

visits->



// $visiteur1 = new  Visiteurs("Loic");
// $zoo->payerEmployes($visiteur1);
// $visiteur2 = new  Visiteurs("Valverde");
// $zoo->payerEmployes($visiteur2);





// zoo livraison animaux
$zoo->livraison([
new Carnivore(" ella ", " Bleine "," carnivore "),
new Herbivore(" EL "," quokka ", " herbivore ")
]);




// debut parcours visiteur
$visiteur->debutparcours();
// $visiteur1->debutparcours();

// Animal



// Carnivore

$animal = new Carnivore($nomA = " mp ", $typeA = " Suricate ", $rA =" carnivore" );
$animal->faireLeShow();
$anima2 = new Carnivore($nomA = " lo ", $typeA = " Ocelot ", $rA =" carnivore " );
$anima2->faireLeShow();
$anima3 = new Carnivore($nomA = " ki ", $typeA = " Fennec ", $rA =" carnivore " );
$anima3->faireLeShow();

// Herbivore

$anima5 = new Herbivore($nomA = " az ", $typeA = " Okapi ", $rA =" herbivore" );
$anima5->faireLeShow();
$anima6 = new Herbivore($nomA = " fa ", $typeA = " Ocelot ", $rA =" herbivore " );
$anima6->faireLeShow();
$anima7 = new Herbivore($nomA = " xs ", $typeA = " dikdik ", $rA =" herbivore " );
$anima7->faireLeShow();


// fin de parcours visiteur
$visiteur->finparcours();
// $visiteur1->finparcours();

?>