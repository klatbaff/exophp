<?php

class Meal{

protected  $size;
protected  $price;
protected  $orderedAt;
protected  $status;

public function __construct($size){
    // fonction qui initialise les données lors du passage de la commande :
    $this-> size = $size;
    $this-> bread = $bread;
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

public function getPrice(){
    return  $this->price;
    }

public function getsize(){
    return  $this->size;      
    }   
}

