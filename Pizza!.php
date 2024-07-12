<?php


class pizza{

private $size;
private $base;
private $ingredient1;
private $ingredient2;
private $ingredient3;
private $price;
private $orderedAt;
private $status;
}

 public function __construct($size,$base,$ingredient1,$ingredient2,$ingredient3){
// fonction qui initialise les données lors du passage de la commande :
    $this-> size = $size;
    $this-> base = $base;
    $this-> ingredient1 = $ingredient1;
    $this-> ingredient2 = $ingredient2;
    $this-> ingredient2 = $ingredient3;
    $this-> status = 'en cours de commande';
    $this-> price = '0';
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
    }}
 // méthode pay() qui permet de passer la pizza en status "payé" uniquement si le status actuel est "en cours de commande"
    public function pay(){
        if ($this->status ==='en cours de commande') {
            $this->statut = 'payé';
}}

// méthode ship() qui permet de passer la pizza en status "livré" uniquement si le status actuel est "payé
    public function ship(){
    if ($this->status ==='payé') {
        $this->statut = 'livré';
}}

$Damien = new pizza ("large", "crème","poulet","curry","tomate");
	var_dump($Damien );
$Damien 	-> pay(10);
	var_dump($Damien );
$Damien 	-> ship();
	var_dump($Damien );