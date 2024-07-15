<?php

require_once('../Meal.php');
require_once('../config/Config.php');

class Pizza extends Meal{

    private $base;
    private $ingredient1;
    private $ingredient2;
    private $ingredient3;
 

    public function __construct($size,$base,$ingredient1,$ingredient2,$ingredient3){
        // fonction qui initialise les données lors du passage de la commande :
        $this-> ingredient1 = $ingredient1;
        $this-> ingredient2 = $ingredient2;
        $this-> ingredient3 = $ingredient3;
        $this-> size = $size;
        $this-> base = $base;
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
    
   
// méthode pour sortir un élément d'un private
    public function getIngredients(){
        return  $this->ingredient1.','.$this->ingredient2.','.$this->ingredient3;
    }

    public function getBase(){
        return  $this->base;          
    }

// méthode pour sortir un élément d'un private

public function getPrice(){
    return  $this->price;
    }

public function getsize(){
    return  $this->size;      
    }   
};



$pizzaDamien = new pizza("large","crème","poulet","curry","tomate");
$pizzaDamien-> pay();
$pizzaDamien-> ship();
var_dump($pizzaDamien);


    

?>
    