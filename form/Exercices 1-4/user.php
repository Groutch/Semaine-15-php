<?php
if(isset($_GET["nom"])&& isset($_GET["prenom"])){
    echo "Nom: ".$_GET["nom"]."<br/>";
    echo "Prenom: ".$_GET["prenom"]."<br/>";
}
if(isset($_POST["p_nom"])&& isset($_POST["p_prenom"])){
    echo "Nom: ".$_POST["p_nom"]."<br/>";
    echo "Prenom: ".$_POST["p_prenom"]."<br/>";
}

?>