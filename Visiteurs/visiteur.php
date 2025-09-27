<?php

class Visiteurs{

    public string $nom;


     public function __construct($nom){ 

    $this->nom = $nom;

}

public function parcours(){
        echo "======================================================<br> ";
        echo  $this->nom . " commence son parcours <br>";
        echo "======================================================<br> ";
    }
}
$visiteur = new Visiteurs("Terminator ");
$visiteur->parcours();

?>