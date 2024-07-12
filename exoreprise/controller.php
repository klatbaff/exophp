<?php
$orders = [
    [
        "id" => 1,
        "customer" => "Maurice",
        "amount" => 200,
        "products" => [
            "Aspirateur",
            "patate",
            "Tomate"
        ],
        "date" => "22-05-24"
    ],
    [
        "id" => 2,
        "customer" => "Kevin",
        "amount" => 500,
        "products" => [
            "Ordinateur",
            "Tomate"
        ],
        "date" => "22-05-24"
    ],
    [
        "id" => 3,
        "customer" => "Pauline",
        "amount" => 350,
        "products" => [
            "Cafetiere",
            "Saucisse"
        ],
        "date" => "22-05-24"
    ],
    [
        "id" => 4,
        "customer" => "Nadia",
        "amount" => 125,
        "products" => [
            "Mixeur",
            "Comcombre"
        ],
        "date" => "22-05-24"
    ],
    [
        "id" => 5,
        "customer" => "Paul",
        "amount" => 400,
        "products" => [
            "Voiture",
            "Farine"
        ],
        "date" => "22-05-24"
    ],
    [
        "id" => 6,
        "customer" => "David",
        "amount" => 140,
        "products" => [
            "Micro-ondes",
            "Pastèque"
        ],
        "date" => "22-05-24"
    ],
    [
        "id" => 7,
        "customer" => "Chantale",
        "amount" => 160,
        "products" => [
            "Gauffrier",
            "Sucre"
        ],
        "date" => "22-05-24"
    ],
    [
        "id" => 8,
        "customer" => "Hélène",
        "amount" => 500,
        "products" => [
            "Poèle",
            "Salade"
        ],
        "date" => "22-05-24"
    ],
]; 

// Première fonction pour reformater la date
function adaptDateFormat($date) {
    $dateTime = DateTime::createWithFormat('dd-mm-yy', $date);
    return $dateTime->format('yy/mm/dd');
}

// Deuxième partie de la fonction pour permettre de reformater la date de chaque commande (maybe présentes et à venir?)

foreach ($orders as &$order) {
    $order['date'] = adaptDateFormat($order['date']);
}

// Inclure la vue pour afficher les commandes 

// /!/ ATTENTION : vérifier que le chemin est correct car pas prise en compte de l'architecture dossier avec un propre fichier views
include 'view.php';
?>


<!-- Les différentes étapes pour arriver à ce résultat : 

    1. Définir les commandes : dans le fichier 'controller.php', les commandes sont définies sous forme de tableau php 
    2.1 Formater la date : Création d'une fonction appellée "adaptDateFormat" pour basculer d'un format 'dd-mm-yy' à un format "yy/mm/dd"
    2.2 Reformater les dates des commandes  : grâce à 'foreach' on parcourt chaque commande et on lui applique la fonction qu'on vient de créer pour changer le format initial de la date 
    3. Inclure la vue : Inclure le fichier "view.php" pour afficher les commandes
    4. Afficher les commandes : On créé un tableau en html dans le fichier "view.php" auquel on ajoute du php pour parcourir chaque commande et afficher les infos associées -->
