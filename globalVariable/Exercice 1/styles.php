<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');
?>
body {
    background-color: black;
    color:green;
}

h1{
    font-size: 18px;
    border-color: aqua;
    border-style: groove;
}