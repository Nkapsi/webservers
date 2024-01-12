<!--Search response page-->
<!--Nicholas K-->

<!DOCTYPE html>
<html>
   <head>
      <title>Redirect</title>
      <?php
        $term = htmlspecialchars($_GET["term"]);
        $IP = $_SERVER['REMOTE_ADDR'];
        
        $server = "localhost";
        $username = "test";
        $password = "password";
        $database = "testdb";
        $conn = mysqli_connect($server, $username, $password, $database);
        $sql = "insert into IPtable (term, IP) values ('$term', '$IP')";
        $result = mysqli_query($conn, $sql);
      ?>
   </head>
   
   <body>
      <?php
        header('Location: https://google.ca/search?q=' .$term);
      ?>
   </body>
</html>