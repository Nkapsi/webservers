<!DOCTYPE html>
<html>
   <head>
      <title>Add an entry to table0</title>
      <?php
         $name = htmlspecialchars($_GET["name"]); 
         $day = htmlspecialchars($_GET["day"]);
         $month = htmlspecialchars($_GET["month"]);
         
         $server = "localhost";
         $username = "test";
         $password = "password";
         $database = "testdb";
         $conn = mysqli_connect($server, $username, $password, $database);
         $sql = "insert into table0 (name, day, month) values ('$name', '$day', '$month')";
         $result = mysqli_query($conn, $sql);
         ?>
   </head>
   <body>
   <h1>Response for SQL database</h1>
      <?php
         echo "Entry Received.</br></br>";
         $sql = "SELECT * FROM table0;";
         $result = mysqli_query($conn, $sql);
         
         foreach($result as $row)
         {
             echo "Entry #{$row['id']} day: {$row['day']} month: {$row['month']} name: {$row['name']} </br>";
         }
         mysqli_close($conn);
         ?>

        <button onclick="goBack()">Return</button>

        <script>
            function goBack() {
                window.history.back();
            }
        </script>

   </body>
</html>