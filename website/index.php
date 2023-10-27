<!DOCTYPE html>
<html>
   <head>
      <script>
         function modify() {
             document.getElementById("para").innerHTML = "New text appeared, wow!";
         }
         function visibility() {
            var x = document.getElementById("hide")
         
             if (x.style.display === "none") {
                  x.style.display = "block";
             } else {
                   x.style.display = "none";
             }
         }
         function img1()  {
             document.getElementById("loading1").src = "loading.gif"
         }
         function img2()  {
             document.getElementById("loading1").src = "blank.jpg"
         }
         function txtchange(elem)   {
             elem.innerHTML="It works!";
         }
         function loadtxt()  {
             const xhttp = new XMLHttpRequest();
             xhttp.onload = function() {
                 document.getElementById("changebyajax").innerHTML =
                 this.responseText;
             }
             xhttp.open("GET", "ajaxtext.txt");
             xhttp.send();
         }
      </script>
      <center>
         <h1><font color="BLACK">HOMEPAGE</font></h1>
         <br />
         <h2><font color="#0e77c9">By: Nick K</font></h2>
         <br />
         <br />
      </center>
   </head>
   <body style="background-image: url('backg.jpg');">
      <center>
         <p><font color="#f6ff00">Welcome to the home page, more to come...</font></p>
         <img id="loading1" src="loading.gif" alt="Loading" width="45" height="45" />
         <br />
         <br />
         <p id="para">Keep an eye on this text</p>
         <br />
         <p id="hide">This text may dissapear..</p>
      </center>
      <div>
         <p>Here's what this page includes:</p>
         <ul>
            <li>Two level headings</li>
            <li>A div</li>
            <li>A paragraph</li>
            <li>Images</li>
            <li>List</li>
            <li>Link to other site</li>
         </ul>
      </div>
      <center>
         <a href="winner.html" target="_blank"> Click this link to win a prize! </a>
         <br />
         <br />
         <button onclick="alert('ALERT')">Press for alert</button>
         <button onclick="modify()">Click here to change something</button>
         <button onclick="visibility()">Click here to hide/show some text</button>
         <button onmouseenter="img2()" onmouseleave="img1()">Hover over me to break something</button>
         <br />
         <button onclick="txtchange(this)">click here to change this text</button>
         <br />
         <br />
         <div id="changebyajax">
            <p>This text will change if AJAX is working as it should</p>
            <button type="button" onclick="loadtxt()">Click to request a txt file</button>
         </div>
      </center>
      <div>
         <h2>What is my user agent string?</h2>
         <p><?= $_SERVER['HTTP_USER_AGENT'] ?></p>
         <h2>___________________________________________________________________</h2>
      </div>
      <div>
         <h2>Order Lookup:</h2>
         <?php
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "orders";
            $conn = mysqli_connect($server, $username, $password, $database);
            
            $sql = "select * from orders;";
            $result = mysqli_query($conn, $sql);
            ?>
         <form action="sqlresponse.php" method="get">
            <label for="order_number">Select an order number:</label>
            <select id="order_number" name="order_number">
            <?php
               foreach ($result as $row)
               {
               	echo "<option value='{$row['id']}'> {$row['order_number']}</option>\n";
               }
               mysqli_close($conn);
               ?>
            </select>
            <input type="submit" value="submit"/>
         </form>
         <br/>
      </div>
      <div>
         <h2>Add an order:</h2>
         <form action="sqlresponse2.php" method="get">
            <label for="order_number"></label>
            Order #: <input class="required" id="order_number" type="number" pattern="([0-9]|[0-9]|[0-9][0-9][0-9][0-9])" name="order_number" placeholder="xxxxxx" />
            <label for="customername"></label>
            Customer: <input class="required" id="customername" type="text" name="customername"/>
            <label for="enterdate"></label>
            Date: <input class="required" id="enterdate" type="date" name="enterdate" placeholder="dd/mm/yy"/>
            <input type="submit" value="submit"/>
         </form>
         <br/>
      </div>
   </body>
</html>