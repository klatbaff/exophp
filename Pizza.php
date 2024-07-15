<?php
require_once('../Meal.php')

class Pizza extends Meal{

    private $base;
    private $ingredient1;
    private $ingredient2;
    private $ingredient3;
 

    public function __construct($base,$ingredient1,$ingredient2,$ingredient3){
        // fonction qui initialise les données lors du passage de la commande :
        $this-> ingredient1 = $ingredient1;
        $this-> ingredient2 = $ingredient2;
        $this-> ingredient3 = $ingredient3;
    }
   
// méthode pour sortir un élément d'un private
    public function getIngredient(){
        return  $this->ingredient1.','.$this->ingredient2.','.$this->ingredient3;
    }
    public function getBase(){
        return  $this->base;
                
    }
}


$pizzaDamien = new pizza("large","crème","poulet","curry","tomate");


foreach($pizzaDamien->getIngredients()as $ingredient){?>
 <h2><?php echo $ingredient; ?></h2>
  <?php}?>
<html>

    <h2><?php echo $pizzaDamien->getBase(); ?></h2>
    <h2><?php echo $pizzaDamien->getsize(); ?></h2>
    <h2><?php echo $pizzaDamien->getIngredient(); ?></h2>
    <h2><?php echo $pizzaDamien->getPrice(); ?></h2>
    


    