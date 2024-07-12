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

    $this-> size = $size;
    $this-> base = $base;
    $this-> ingredient1 = $ingredient1;
    $this-> ingredient2 = $ingredient2;
    $this-> ingredient2 = $ingredient3;
    $this-> status = 'en cours de commande';
    $this-> price = '0';
    $this-> orderedAt = new datetime('NOW');
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

    public function pay(){
        if ($this->status ==='en cours de commande') {
            $this->statut = 'payé';
}}
    public function ship(){
    if ($this->status ==='payé') {
        $this->statut = 'livré';
}}
