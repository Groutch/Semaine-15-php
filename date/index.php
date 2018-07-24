<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Date</title>
</head>

<body>
    <h1 class="text-center">Différents formats de Date:</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Exercice 1</h3>
                <?php
                setlocale(LC_TIME, 'fr_FR.utf8','fra');
                echo date("d/m/Y")."<br/>";
                ?>
            </div>
            <div class="col">
                <h3>Exercice 2</h3>
                <?php
                echo date("d-m-Y")."<br/>";
                ?>
            </div>
            <div class="col">
                <h3>Exercice 3</h3>
                <?php
                echo date("l j F Y")."<br/>";
                echo strftime("%A %d %B %Y")."<br/>";
                ?>
            </div>
            <div class="col">
                <h3>Exercice 4</h3>
                <?php
                echo "Timestamp pour aujourd'hui: ".mktime(date("H"), date("i"), date("s"), date("n"), date("j"), date("Y"))."<br/>";
                echo "Timestamp pour le 2 Aout 2016: ".mktime(15,00,00,8,2,16)."<br/>";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h3>Exercice 5</h3>
                <?php
                $date1 = new DateTime("now");
                $date2 = new DateTime("2016-05-16");
                $interval = $date1->diff($date2);
                echo $interval->days." jours entre aujourd'hui et le 16/05/2016"."<br/>";
                ?>
            </div>
            <div class="col">
                <h3>Exercice 6</h3>
                <?php
                echo "Nombre de jours en février 2016: ".cal_days_in_month(CAL_GREGORIAN, 2, 2016)."<br/>";
                ?>
            </div>
            <div class="col">
                <h3>Exercice 7</h3>
                <?php
                echo "Dans 20 jours on sera le: ".date("d/m/Y", strtotime("+20 days"))."<br/>";
                ?>
            </div>
            <div class="col">
                <h3>Exercice 8</h3>
                <?php
                echo "Il y a 22 jours on était le: ".date("d/m/Y", strtotime("-22 days"))."<br/>";
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js"></script>
</body>

</html>
<script></script>
