<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>
 <body>
    <p>GET: <?= var_dump($_GET) ?></p>
    <p>POST: <?= var_dump($_POST) ?></p>

    <p>Your card type is: <?=$_POST["cctype"]?></p>
    <p>Your credit card number is: <?=$_POST["ccn"]?></p>
    <p>Your name is: <?=$_POST["name"]?></p>
    <p>Your cvv code is: <?=$_POST["cvv"] ?></p>
    <p>Your country is: <?=$_POST["Countries"] ?></p>

 </body>
</html>