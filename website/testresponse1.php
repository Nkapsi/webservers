<!--Retrieved entry from selected name-->

<!DOCTYPE html>
<html>
   <head>
      <title>Response for SQL database</title>
      <?php
        $name = htmlspecialchars($_GET["name"]); 
        $server = "localhost";
        $username = "test";
        $password = "password";
        $database = "testdb";
        $conn = mysqli_connect($server, $username, $password, $database);
        $sql = "select day, month, name from table0 where id='{$name}';";
        $result = mysqli_query($conn, $sql);
      ?>

</head>
   <body>
        <?php
            foreach($result as $row)
            {
                echo "Entry with name {$row['name']} was placed on day:{$row['day']} in month:{$row['month']}";
            }
        mysqli_close($conn);
        ?>
   </body>
</html>