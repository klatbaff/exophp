<?php

require_once('../config/Config.php');



function LogUser(){
session_start();
        $_SESSION['UserName'] = $_POST['UserName'];
}


function redirectToAdmin(){
session_start();
if ($_SESSION['UserName'] !== "Damien") {
    header("Location: http://localhost/Corrigé/views/adminCreateArticle.php");
  }}





