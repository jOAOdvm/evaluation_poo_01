<?php

class Animal
{

    public string $nomAnimal;
    public string $typeAnimal;
    public string $regimeAlimentaire;


    public function __construct($nomA, $typeA, $rA)
    {

        $this->nomAnimal = $nomA;
        $this->typeAnimal = $typeA;
        $this->regimeAlimentaire = $rA;
    }



    public function faireLeShow()
    {
        echo " cet animal " . $this->regimeAlimentaire . " qui est un " .  $this->typeAnimal  . " et s’appelle " . $this->nomAnimal . "fait le show ! <br><br>";
    
    
    }

public function donnerNaissance(){
    echo "  un  est né dans le Zoo  ";
}




}




?>
