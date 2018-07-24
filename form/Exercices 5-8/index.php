<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Formulaire </title>
</head>

<body>

    <?php
        if(isset($_POST["p_nom"])&& isset($_POST["p_prenom"]) && isset($_POST["p_civilite"]) && pathinfo($_FILES["p_file"]["name"], PATHINFO_EXTENSION) == "pdf"){
            echo $_POST["p_civilite"]." ".$_POST["p_prenom"]." ".$_POST["p_nom"]."<br/>";
            echo "Fichier: ".pathinfo($_FILES["p_file"]["name"], PATHINFO_FILENAME)."<br/>";
            echo "Extension: ".pathinfo($_FILES["p_file"]["name"], PATHINFO_EXTENSION)."<br/>";
            
        }else{ ?>
        <h1>Entrez votre nom, prenom civilité et fichier PDF</h1>
        <form method="post" action="index.php" enctype="multipart/form-data">
           <SELECT name="p_civilite">
                <OPTION>Mr</OPTION>
                <OPTION>Mme</OPTION>
            </SELECT>
            <label for="p_prenom">Prénom:</label>
            <input type="text" id="p_prenom" name="p_prenom">
            <label for="p_nom">Nom:</label>
            <input type="text" id="p_nom" name="p_nom">
            <input type="file" id="p_file" name="p_file">
            <input type="submit" value="KOIN">
        </form>
        <?php }
    ?>
</body>

</html>
