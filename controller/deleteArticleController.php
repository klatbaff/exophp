<?php

require_once('../config/Config.php');

        session_start();
        if ($_SESSION['UserName'] !== "Damien") {
            header("Location: http://localhost/Corrigé/views/connection.php");
                }

                file_put_contents ('../articles.txt','');