<?php



class Zoo{

public array $animal =[];
public array $visiteurs =[];

public function __construct(){

    $this->animal = [];
    $this->visiteurs = [];

}

public function livraison($animal){

$this->animal = array_merge($this->animal, $animal);
echo "une livraison de " . count($animal) . " animaux a été effectué <br>";
 echo "======================================================<br> ";

}

// -------------------------------------------------------------------------
public function payerEmployes($visiteur){
    // $this->visiteurs[] = $visiteur;

echo "Vente billet au visiteur  : " . $visiteur->nom . "<br>";
echo "======================================================<br> ";
    



// $visiteur->debutparcours();


    echo "les porte de Zoo sont désormais ouvert <br>";
echo "======================================================<br> ";


// foreach ($this->animal as $animal){
// $animal->faireLeShow($visiteur);



// $visiteur->finparcours();

}

}





// }

?>