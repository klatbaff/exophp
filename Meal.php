<?php

class Meal{

protected  $size;
protected  $price;
protected  $orderedAt;
protected  $status;


// méthode pay() qui permet de passer la pizza en status "payé" uniquement si le status actuel est "en cours de commande"
public function pay(){
    if ($this->status ==='en cours de commande') {
        $this->status = 'payé';
        }
    }

// méthode ship() qui permet de passer la pizza en status "livré" uniquement si le status actuel est "payé
public function ship(){

    if ($this->status ==='payé') {
        $this->status = 'livré';
        }
    }
};


