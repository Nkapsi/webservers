<!DOCTYPE html>
<html>
   <head>
      <title>Response for SQL database</title>
      <?php
        $order_number = (int)($_GET["order_number"]); 
        $server = "localhost";
        $username = "php";
        $password = "password";
        $database = "orders";
        $conn = mysqli_connect($server, $username, $password, $database);
        $sql = "select order_number, customer_name, order_date from orders where id='{$order_number}';";
        $result = mysqli_query($conn, $sql);
      ?>
</head>
   <body style="background-image: url('backg.jpg');">
        You selected table row #<?= $order_number ?><br/><br/>
        <?php
            foreach($result as $row)
            {
                echo "Order #{$row['order_number']} was placed by {$row['customer_name']} on {$row['order_date']}";
            }
        mysqli_close($conn);
        ?>
   </body>
</html>