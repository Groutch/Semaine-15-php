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
    session_start();
    echo '<h1>Bienvenue sur la page d\'accueil</h1>';
    $_SESSION['nom']='SCHERRER';
    $_SESSION['prenom']='Clément';
    $_SESSION['age']= 31;
    echo '<br /><a href="page2.php">page 2</a>';
    ?>
</body>

</html>
