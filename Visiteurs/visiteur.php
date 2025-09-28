<?php

class Visiteurs{

    public string $nom;


     public function __construct($nom){ 

    $this->nom = $nom;

}

public function debutparcours(){
        echo "======================================================<br> ";
        echo  $this->nom . " commence son parcours <br>";
        echo "======================================================<br> ";
    }

    public function finparcours(){
        echo "======================================================<br> ";
        echo  " Fin de parcours pour ". $this->nom . "<br>";
        echo "======================================================<br> ";
    }
}

?>