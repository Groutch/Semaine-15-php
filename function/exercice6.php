<?php
function HelloYou($nom="Scherrer",$prenom="Clément",$age=31)
{
    return "Bonjour $nom $prenom tu as $age ans\n";
}
echo HelloYou();
echo HelloYou("Janvier","Valentin", 21);
?>