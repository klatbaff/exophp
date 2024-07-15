<?php
require_once('../Meal.php')

class Hotdog extends Meal{

    private $bread;

    public function __construct($bread){
        // fonction qui initialise les données lors du passage de la commande :
            $this-> bread = $bread;
    }


public function getbread(){
    return  $this->bread;      
    }
}


$hotdogDamien = new hotdog("large,toasté");

 echo $hotdogDamien->getsize();


