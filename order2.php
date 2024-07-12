<?php

class Order{
     private $statut;
     private $products;
     private $totalPrice;
     private $productQty;
     private $id;
     private $customer;

    }

        public function __construct($customer){

        $this-> statut = 'en attente';
        $this-> productQty = 0;
        $this-> totalPrice = 0;
        $this-> id = uniqid();
        $this-> customer = $customer;
        }
        public function pay(){
        if ($this->statut ==='en attente') && ($this->productQty > 0) && ($this->totalPrice > 0) {
            $this->statut = 'payé';
          }
        }
        public function cancel(){
        if ($this->statut ==='en attente') && ($this->productQty > 0)
        $this->statut = 'annulé';
        }

        public function AjoutProducts(){
            if ($this->statut ===='en attente'){
                $this->productQty +=1;
                $totalPrice ->productQty +=10; 
            }
        }
        public function RetraitProducts(){
            if ($this->statut ==='en attente')&&($this->productQty > 0)&& ($this->totalPrice > 0){
                $this->productQty -=1;
                $totalPrice ->productQty -=10; 
            }
        }


    
 $order= new Order('Damien');

 $order->AjoutProducts();
 $order->AjoutProducts();
 $order->AjoutProducts();
 $order->AjoutProducts();
 $order->RetraitProducts();
 

 var_dump($order);