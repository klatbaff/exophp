
<h1>mlkjhgf</h1>

<?php
require_once('../Meal.php');

class Hotdog extends Meal{

    private $bread;

    public function __construct($bread){
        // fonction qui initialise les données lors du passage de la commande :
            $this-> bread = $bread;
            $this-> size = $size;
            $this-> status = 'en cours de commande';
            $this-> orderedAt = new datetime('NOW');

             // prix en fonction de la taille.
    if ($this->size ==='small'){
        $this->price = '8€';
        }

    if ($this->size ==='medium'){
        $this->price = '12€';
        }

    if ($this->size ==='large'){
        $this->price = '16€';
        }

    if ($this->size ==='Xtralarge'){
        $this->price = '20€';
        }
    }
    

    public function getbread(){
    return  $this->bread;      
    }
// méthode pour sortir un élément d'un private

public function getPrice(){
    return  $this->price;
    }

public function getsize(){
    return  $this->size;      
    }   

};


$hotdogDamien = new hotdog("large,toasté");

 echo $hotdogDamien->getsize();


