<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Title </title>
</head>

<body>
    <form method="post" action="index.php">
        <h1>POST</h1>
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">
        <label for="password">Mot de Passe:</label>
        <input type="text" id="password" name="password">
        <input type="submit" value="KOIN">
    </form>
    <?php
    if(isset($_POST['login']) && $_POST['password'])
    {
        setcookie("login",$_POST['login']);
        setcookie("password",$_POST['password']);
        echo "<a href='page2.php'>Afficher Cookies</a>";
    }
    ?>

</body>

</html>
