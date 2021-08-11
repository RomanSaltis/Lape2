<!-- 6.	Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi 
skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių $_GET ar $_POST 
reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas iš GET formos ir geltonai- 
kai iš POST. -->

<?php

$color = "green";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $color = "yellow";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bg-color{
            background-color:<?=$color?>
        }
    </style>
</head>
<body class="bg-color">
    <form action="" method="get">
        <button type="submit">GET</button>
    </form>
<br>
    <form action="" method="post">
        <button type="submit">Post</button>
    </form>
    
</body>
</html>