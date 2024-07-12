<?php

require_once('./config/Config.php');



class VendorMachine {

    private $snacks;

    private $cashAmount;

    private $isOn;

    private $currentTime;


    function __construct() {
               $this->isOn = false;
               $this->cashAmount=0;
               $this->currentTime = intval(date('H'));
                $this->snacks = [
                                [
               "name" => "Snickers",
               "price" => 1,
                "quantity" => 5
            ],
            [
                "name" => "Mars",
                "price" => 1.5,
                "quantity" => 5
            ],
            [
                "name" => "Twix",
                "price" => 2,
                "quantity" => 5
            ],
            [
                "name" => "Bounty",
                "price" => 2.5,
                "quantity" => 5
            ]
        ];

    }
   

    public function turnOn(){
       if($this->isOn === false){
           $this->isOn = true;
       

       }
   }

   public function turnOff(){
       if($this-> isOn === true && $this->currentTime >= 18 ){
           $this-> isOn = false;
       }
   }


        // s'il est après 18h (on ne peux pas éteindre la machine avant 18h)

        // éteint la machine
    

    function buySnack($snackName){

       if($this-> isOn === true){
           // si la machine est allumée

           foreach($this->snacks as $key => $snack){

               if($snack['name'] === $snackName && $snack['quantity'] > 0){
               //si le snack est présent dans la liste
                   //et que la quantité est suffisante
                   $this->snacks [$key]['quantity'] = $this->snacks [$key]['quantity']-1;
                   // on enlève une quantité pour ce snack
                   $this->cashAmount += $snack['price'];
                   // et on ajoute au cashAmount le montant du snack

               }
           }
       }
   }



    function shootWithFoot() {

       if($this-> isOn === true){
       // si la machine est allumée

           $randomSnack = round(rand(0, count($this->snacks) -1));
           $randomCash = round(rand(0, $this->cashAmount * 100)/100);

           if($this->snacks[$randomSnack]['quantity'] > 0){
               $this->snacks[$randomSnack]['quantity']-- ;
               //  fais tomber un snack au hasard
           }

           $this->cashAmount -= $randomCash;
       }
       //  et fait tomber un montant de cash au hasard
       // donc decremente le snack et le cashAmount
    }
}

$vendorMachine = new VendorMachine();

$vendorMachine ->turnOn();
var_dump($vendorMachine);

$vendorMachine ->shootWithFoot();

var_dump($vendorMachine);
