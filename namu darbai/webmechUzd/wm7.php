<!-- 7.	Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST 
metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu -->

<?php

$color = "green";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $color = "yellow";
    header("location:./wm7.php");
    die;
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