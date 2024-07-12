<?php


class Pizza{

    private $size;
    private $base;
    private $ingredient1;
    private $ingredient2;
    private $ingredient3;
    private $price;
    private $orderedAt;
    private $status;


    public function __construct($size,$base,$ingredient1,$ingredient2,$ingredient3){
        // fonction qui initialise les données lors du passage de la commande :
        $this-> size = $size;
        $this-> base = $base;
        $this-> ingredient1 = $ingredient1;
        $this-> ingredient2 = $ingredient2;
        $this-> ingredient3 = $ingredient3;
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
    // méthode pay() qui permet de passer la pizza en status "payé" uniquement si le status actuel est "en cours de commande"
    public function pay(){
        if ($this->status ==='en cours de commande') {
            $this->statut = 'payé';
        }
    }

    // méthode ship() qui permet de passer la pizza en status "livré" uniquement si le status actuel est "payé
    public function ship(){

        if ($this->status ==='payé') {
            $this->statut = 'livré';
        }
    }
// méthode pour sortir un élément d'un private
    public function getIngredient(){
        return  $this->ingredient1.','.$this->ingredient2.','.$this->ingredient3;
    }

    public function getPrice(){
        return  $this->price;
    }

    public function getsize(){
        return  $this->size;      
    }

    public function getBase(){
        return  $this->base;
                
    }
}


$pizzaDamien = new pizza("large","crème","poulet","curry","tomate");

?>

<html>

    <h2><?php echo $pizzaDamien->getBase(); ?></h2>
    <h2><?php echo $pizzaDamien->getsize(); ?></h2>
    <h2><?php echo $pizzaDamien->getIngredient(); ?></h2>
    <h2><?php echo $pizzaDamien->getPrice(); ?></h2>


    