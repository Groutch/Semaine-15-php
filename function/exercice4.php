<?php
function bigger($var1,$var2)
{
    echo"nombre1:".$var1." nombre2:".$var2."\n";
    if ($var1 > $var2)
    {
        echo "Premier nombre plus grand";
    }elseif($var2 > $var1)
    {
        echo "Deuxieme nombre plus grand";
    }elseif($var1 = $var2)
    {
        echo "Deux nombres identiques";
    }
    echo "\n";
}
bigger(2,3);
bigger(3,2);
bigger(3,3);
?>