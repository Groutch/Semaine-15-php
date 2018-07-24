<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.php">
    <title> Title </title>
</head>

<body>
    <h1>
    <?php
        echo "Adresse IP: ".$_SERVER['REMOTE_ADDR']."<br/>User Agent: ".$_SERVER['HTTP_USER_AGENT']."<br/>Nom du serveur: ".$_SERVER['SERVER_NAME']."<br/>";
    ?>
    </h1>
</body>

</html>
