<!DOCTYPE html>
<html>
   <head>
      <title>Form response</title>
   </head>
   <body>
      <p>Your card type is: <?= htmlspecialchars($_POST["cctype"]); ?></p>
      <p>Your credit card number is: <?= htmlspecialchars($_POST["ccn"]); ?></p>
      <p>Your name is: <?= htmlspecialchars($_POST["name"]); ?></p>
      <p>Your cvv code is: <?= htmlspecialchars($_POST["cvv"]); ?></p>
      <p>Your country is: <?= htmlspecialchars($_POST["Countries"]); ?></p>
   </body>
</html>