<?php
session_start();
session_destroy();
include ("function.php");
supprime_dossier_visiteur($_SESSION["chemin"]);
unset($_SESSION);
header("location:../");
