<!DOCTYPE html>
<html>
   <head>
      <title>Response for SQL database</title>
      <?php
        $order_number = (int)($_GET["order_number"]); 
        $customer_name = htmlspecialchars($_GET["customername"]);
        $order_date = htmlspecialchars($_GET["enterdate"]);

        $server = "localhost";
        $username = "php";
        $password = "password";
        $database = "orders";
        $conn = mysqli_connect($server, $username, $password, $database);
        $sql = "insert into orders (order_number, customer_name, order_date) values '{$}';";
        $result = mysqli_query($conn, $sql);
      ?>
</head>
   <body style="background-image: url('backg.jpg');">
        <?php
            foreach($result as $row)
            {
                echo "Order #{$row['order_number']} was placed by {$row['customer_name']} on {$row['order_date']}";
            }
        mysqli_close($conn);
        ?>
   </body>
</html>