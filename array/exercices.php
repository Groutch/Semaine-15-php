<?php
$mois = array("janvier","février","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","décembre");
echo $mois[2]."\n";
echo $mois[5]."\n";
$mois[7]="août";
echo $mois[7]."\n";
$hdf=array(2=>"Aisne",59=>"Nord",60=>"Oise",62=>"Pas-de-Calais",80=>"Somme");
echo $hdf[59]."\n";
$hdf[51]="Marne";
echo "\nexercice 8: \n";
foreach ($mois as $m){
    echo $m."\n";
}
echo "\nexercice 9\n";
var_dump($hdf);

echo "\nexercice 10\n";
foreach($hdf as $num => $dep){
    echo "Le département $dep a le numero $num\n";
}
?>