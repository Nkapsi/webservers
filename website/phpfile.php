<!DOCTYPE html>
<html>
    <head>
        <title>Form response</title>
    </head>
 <body>
   
    <p>Your card type is: <?= htmlspecialchars($_POST["cctype"]); ?></p>
    <p>Your credit card number is: <?= tmlsepcialchars($_POST["ccn"]); ?></p>
    <p>Your name is: <?= htmlsepcialchars($_POST["name"]); ?></p>
    <p>Your cvv code is: <?= htmlsepcialchars($_POST["cvv"]); ?></p>
    <p>Your country is: <?= htmlsepcialchars($_POST["Countries"]); ?></p>

 </body>
</html>