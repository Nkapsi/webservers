<!DOCTYPE html>
<html>
   <head>
      <title>Practice for final exam</title>
   </head>
   
   <body>
        <h1>Practice for final</h1>
        
        <!--Establish connection to sql server-->
        <?php
            $server = "localhost";
            $username = "test";
            $password = "password";
            $database = "testdb";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            $sql = "select * from table0;";
            $result = mysqli_query($conn, $sql);
        ?>

        <div>
        <!--Response form-->
        <form action="testresponse1.php" method="get">
        <!--Options-->
        <label for="day">Select a name:</label>
        <select id="name" name="name">
        <?php
            foreach ($result as $row)
            {
          	echo "<option value='{$row['id']}'> {$row['name']}</option>\n";
            }
            mysqli_close($conn);
        ?>
        </select>
        <input type="submit" value="submit"/>
        </form>
        </div>
        
        <br/> <br/>
        
        <!--Add entry to SQL table-->
        <div>
         <h2>Add an entry:</h2>
         <form action="testresponse2.php" method="get">
            <label for="name"></label>
            Name: <input class="required" id="name" type="text" name="name" placeholder="xxxx" />
            
            <label for="day"></label>
            Day: <input class="required" id="day" type="text" name="day" placeholder="xx"/>
            
            <label for="month"></label>
            Month: <input class="required" id="month" type="text" name="month" placeholder="xx"/>
            
            <input type="submit" value="submit"/>
         </form>
         <br/>
      </div>
    
    <!--remove entry from SQL table-->
        <div>
            <h2>Remove an entry:</h2>
            <form action="testresponse3.php" method="get">
                <label for="id"></label>
                Entry #: <input class="required" id="id" type="number" name="id" placeholder="xx" />    
                <input type="submit" value="submit"/>
            </form>
        </div>
   
    </body>
</html>