<?php session_start(); ?>

<!Doctype html>
<head>
    <meta charset="utf-8">
    <title> Album</title>
    <link rel="stylesheet" href="../css/style-celebrity.css">
</head>
<body>
    <div class="celebrity">
        <h1>Mes Photos</h1>
        <div class="btn-ajout">
            <a href="../index.php">Ajouter des Photos</a>
        </div>
        <?php

        if (isset($_FILES["image"]["name"]) && ($_FILES["image"]["error"]==0)){

            if(!isset($_SESSION["adresse"])){
                $nom_dossier_visiteur = time();
                mkdir("../img".$nom_dossier_visiteur);
                $_SESSION["chemin"]="../img".$nom_dossier_visiteur;
            }
            $dossier_destination = $_SESSION["chemin"]."/".$_FILES["image"]["name"];
            move_uploaded_file($_FILES["image"]["tmp_name"],$dossier_destination);
            $_SESSION["adresse"][$_FILES["image"]["name"]] = $dossier_destination;

        }
        if (isset($_SESSION["adresse"])){
            foreach ($_SESSION["adresse"] as $key => $value){
                echo "<img src=\"$value\" alt=\"$key\" >";
                

            }
        }


        ?>
        <div class="btn-ajout">
            <?php

                if (isset($_SESSION["adresse"])){
                    echo '<a href="../index.php">Ajouter mes Photos</a>';
                }
            ?>
            <?php

            if (isset($_SESSION["adresse"])){
                echo '<a href="logout.php">Renitialiser</a>';
                }
            ?>

        </div>
    </div>

</body>
