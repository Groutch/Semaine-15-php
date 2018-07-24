<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
</head>

<body>
    <?php
        echo "Information des cookies (miam): <br/> Login: ".$_COOKIE["login"]."<br/> Mot de Passe: ".$_COOKIE["password"]."<br/>";
        echo "<a href='page3.php'>Modifier Cookies</a>";
    ?>
</body>

</html>
