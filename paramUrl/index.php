<?php
    if(isset($_GET["nom"])&&isset($_GET["prenom"])){
        echo $_GET["nom"]." ".$_GET["prenom"]."\n";
    }
    if(isset($_GET["age"])){
        echo $_GET["age"]." ans\n";
    }else{
        echo "pas d'age\n";
    }
    if(isset($_GET["dateDebut"]) && isset($_GET["dateFin"])){
        echo "Date de début: ".$_GET["dateDebut"]."\n";
        echo "Date de fin: ".$_GET["dateFin"]."\n";
    }
    if(isset($_GET["langage"]) && isset($_GET["serveur"])){
        echo "Langage: ".$_GET["langage"]."\n";
        echo "Serveur: ".$_GET["serveur"]."\n";
    }
    if(isset($_GET["semaine"])){
        echo "Semaine:".$_GET["semaine"]."\n";
    }
    if(isset($_GET["batiment"]) && isset($_GET["salle"])){
        echo "Batiment :".$_GET["batiment"]."\n";
        echo "Salle :".$_GET["salle"]."\n";
    }
?>