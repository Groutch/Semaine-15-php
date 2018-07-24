<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Page 2 </title>
</head>

<body>
    <?php
    session_start();
    echo '<h1> Bienvenue sur la page numéro 2 voici les infos récupérées depuis la session:</h1><br />';
    echo $_SESSION['nom'].'<br/>'; 
    echo $_SESSION['prenom'].'<br/>'; 
    echo $_SESSION['age'].'<br/>';
    ?>
</body>

</html>
