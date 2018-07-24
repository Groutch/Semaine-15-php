<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Formulaire </title>
</head>

<body>
    <form method="get" action="user.php">
        <h1>GET</h1>
        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" name="prenom">
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom">
        <input type="submit" value="KOIN">
    </form>
    <form method="post" action="user.php">
        <h1>POST</h1>
        <label for="p_prenom">Prénom:</label>
        <input type="text" id="p_prenom" name="p_prenom">
        <label for="p_nom">Nom:</label>
        <input type="text" id="p_nom" name="p_nom">
        <input type="submit" value="KOIN">
    </form>
</body>

</html>
