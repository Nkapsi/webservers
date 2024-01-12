<!DOCTYPE html>
<html>
   <head>
      <title>Remove an entry from table0</title>
      <?php
         $id = (int)$_GET["id"];

         $server = "localhost";
         $username = "test";
         $password = "password";
         $database = "testdb";
         $conn = mysqli_connect($server, $username, $password, $database);
         $sql = "delete from table0 where id=('$id')";
         $result = mysqli_query($conn, $sql);
         ?>
   </head>
   <body>
   <h1>Remove a user</h1>
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