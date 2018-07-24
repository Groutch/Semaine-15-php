<?php
function WhoAmI($age,$genre)
{
    if($genre=="homme"){
        $str1="un homme";
    }elseif($genre=="femme"){
        $str1="une femme";
    }else{
        $str1="non binaire";
    }
    
    if($age>=18){
        $str2="majeur";
    }elseif($age<18){
        $str2="mineur";
    }
    echo "Vous êtes $str1 et vous êtes $str2\n";
}
WhoAmI(18,"homme");
WhoAmI(17,"homme");
WhoAmI(18,"femme");
WhoAmI(17,"femme");
WhoAmI(18,"homme");
WhoAmI(55,"KOIN");
?>