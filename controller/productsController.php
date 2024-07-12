<?php

require_once('../config/Config.php');

$products = [
	
	[
		'name' => 'Frigo',
		'price' => 200,
		'category' => 'electro-menager',
		'description' => 'Description du produit 2',
		'createdAt'=>'23-11-1988',
	],
	[
		'name' => 'Vélo',
		'price' => 900,
		'category' => 'sport',
		'description' => 'Description du produit 9',
		'createdAt'=>'15-04-1990',
	],
	[
		'name' => 'Four',
		'price' => 300,
		'category' => 'electro-menager',
		'description' => 'Description du produit 3',
		'createdAt'=>'08-09-1992',
	],
	
	[
		'name' => 'Ordinateur',
		'price' => 500,
		'category' => 'informatique',
		'description' => 'Description du produit 5',
		'createdAt'=>'02-07-2002',
	],
	[
		'name' => 'Tablette',
		'price' => 600,
		'category' => 'informatique',
		'description' => 'Description du produit 6',
		'createdAt'=>'12-08-2010',
	],
	[
		'name' => 'Télévision',
		'price' => 400,
		'category' => 'electro-menager',
		'description' => 'Description du produit 4',
		'createdAt'=>'30-01-2000',
	],
	[
		'name' => 'Smartphone',
		'price' => 700,
		'category' => 'informatique',
		'description' => 'Description du produit 7',
		'createdAt'=>'28-02-2020',
	],
	[
		'name' => 'Appareil photo',
		'price' => 800,
		'category' => 'informatique',
		'description' => 'Description du produit 8',
		'createdAt'=>'13-03-2003',
	],

	[
		'name' => 'Tapis de course',
		'price' => 1000,
		'category' => 'sport',
		'description' => 'Description du produit 10',
		'createdAt'=>'05-10-2005',
	],
	[
		'name' => 'Aspirateur',
		'price' => 100,
		'category' => 'electro-menager',
		'description' => 'Description du produit 1',
		'createdAt'=>'28-05-1999',
	],
	[
		'name' => 'Haltères',
		'price' => 1100,
		'category' => 'sport',
		'description' => 'Description du produit 11',
		'createdAt'=>'20-02-2001',
	],
	[
		'name' => 'Ballon de foot',
		'price' => 1200,
		'category' => 'sport',
		'description' => 'Description du produit 12',
		'createdAt'=>'06-12-2015',
	]
];


$categories=[];

foreach($products as $product){
    if(!in_array($product['category'], $categories)){
        $categories[] = $product['category'];
    };
}

$productPricemin = $products[0]['price'];

foreach($products as $product){
    if($product['price'] < $productPricemin){
        $productPricemin = $product['price'];
    };
}

$productPricemax = $products[0]['price'];

foreach($products as $product){
    if($product['price'] > $productPricemax){
        $productPricemax = $product['price'];
    };
}

if(!empty($_GET)){
    if(!empty($_GET['category'])){
        $products = array_filter($products, function($product){
            return $product['category'] === $_GET['category'];
        });
    };

    if(!empty($_GET['pricemin'])){
        $products = array_filter($products, function($product){
            return $product['price'] >= (float)$_GET['pricemin']; 
        });
    };

    if(!empty($_GET['pricemax'])){
        $products = array_filter($products, function($product){
            return $product['price'] <= (float)$_GET['pricemax']; 
        });
    };
}





$productsUsort = $products;
//si j'ai un parametre GET nommé "sort" et qu'il est égale a price 
if(isset($_GET['sort']) && $_GET['sort'] === 'price'){

    //alors j'utilise la fonction php usort qui permet de trier je trie en fonction du prix usort ne retourne pas de nouveau tableau, mais modifie le tableau original ($products)
    usort($products, function($a,$b){
        return $a['price'] <=> $b['price'];
    });
}




if(isset($_GET['sort']) && $_GET['sort'] === 'date'){
 
    usort($products, function($a,$b){
		$Datea= new DateTime($a['createdAt']);
		$Dateb =new DateTime($b['createdAt']);

        return $Datea <=> $Dateb;
    });
}
