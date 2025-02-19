<?php

require_once('../config/Config.php');

//La super globale $_SERVER permet de récupérer les données de la requête 
//(et des infos) sur le serveur.
//Ici j'utilise la clé REQUEST_METHOD pour savoir si la requête du navigateur
// pour accéder au fichier est "POST"



session_start();
if ($_SESSION['UserName'] !== "Damien") {
    header("Location: http://localhost/Corrigé/views/connection.php");
}



function isRequestPost() {
	return $_SERVER["REQUEST_METHOD"] === "POST";
}

function isFormDataValid(){

    if (mb_strlen($_POST['title'])<2 &&
    mb_strlen($_POST['content'])>10 &&
    mb_strlen($_POST['image'])>5)
    {
    return true;
    }else{
    return false;
    }
}

function getFormErrors() {
	$errors = [];

	if (mb_strlen($_POST['title']) < 2) {
		$errors[] = "Le titre doit faire plus de 2 caractères";
	}

	if (mb_strlen($_POST['title']) > 20) {
		$errors[] = "Le titre doit faire moins de 20 caractères";
	}

	if (mb_strlen($_POST['image']) < 3) {
		$errors[] = "L'image doit faire plus de 3 caractères";
	}

	if (mb_strlen($_POST['content']) < 5) {
		$errors[] = "Le contenu doit faire plus de 5 caractères";
	}

	if (mb_strlen($_POST['content']) > 200) {
		$errors[] = "Le contenu doit faire moins de 200 caractères";
	}

	return $errors;
}


if (isRequestPost() && empty(getFormErrors())) {

	// je récupère la valeur des champs de formulaire envoyé
	// grâce à $_POST, avec en clé le nom du champs à récupérer
    $title = $_POST['title'];
    $content = $_POST['content'];
	$image = $_POST['image'];
	
	$createdAt = new DateTime();

	$handle = fopen("../articles.txt", 'a');

	
	$article = "Le titre est : " .$title. ", le contenu est : " .$content." et l'image est : ".$image. " crée le:" .$createdAt->format("d/m/y");

    if ($handle) {
        fwrite($handle, $article);
        fclose($handle);
    } 

}