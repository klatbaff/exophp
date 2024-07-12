<?php
 class Order{

    private $products;
    private $totalPrice;
    private $statut;
    private $productQty;
    private $id;
    private $customer;


    function __construct($customer){
        $this-> statut ='en cours de paiement';
        $this-> totalPrice=0;
        $this-> productQty=0;
        $this-> id= uniqid();
        $this-> customer=$customer;

    }

    public function AjoutProducts(){
        if ($this-> statut ==='en cours de paiement'){
           $this-> productQty++;
           $this-> totalPrice= $this-> totalPrice +10;
        }
    }

    public function RetraitProducts(){
        if ($this->productQty > 0 && $this->totalPrice > 0 && $this-> statut ==='en cours de paiement'){
            $this-> productQty--;
           $this-> totalPrice= $this-> totalPrice -10;
       }
    }

    public function pay(){
        if($this-> totalPrice>0 && $this-> statut ==='en cours de paiement'){
            $this-> statut ='Vous avez bien payé';
        }
    }

    public function Cancel(){
        if ($this-> totalPrice > 0 && $this-> statut ==='en cours de paiement'){
            $this-> statut ='Vous avez annulé votre commande';
        }
    }
 }

 $order= new Order('Damien');

 $order->AjoutProducts();
 $order->AjoutProducts();
 $order->AjoutProducts();
 $order->AjoutProducts();
 $order->RetraitProducts();
 

 var_dump($order);
