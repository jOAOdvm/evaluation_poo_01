<?php

class Herbivore extends Animal{

    public function __construct( $nomA,  $typeA,  $rA = "herbivore") {
        parent::__construct($nomA, $typeA, $rA);
}
}