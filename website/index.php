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

        </script>
    <center>
            <h1><FONT COLOR=BLACK>HOMEPAGE</FONT></h1>
            <br/>
            <h2><FONT COLOR=#0e77c9>By: Nick K</FONT></h2>
            <br/><br/>
        </head>

    <body style="background-image: url('backg.jpg');">
            <p><FONT COLOR=#f6ff00>Welcome to the home page, more to come...</FONT></p>
            <img id="loading1" src="loading.gif" alt="Loading" width="45" height="45">
            <br/><br/>
            <p id="para">Keep an eye on this text</p>
            <br/>
            <p id="hide">This text may dissapear..</p>

    </center>
        <div>
           <p>Here's what this page includes: </p>
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
            <a href="winner.html" target="_blank"> Click this link! </a>
            <br/><br/>
            <button onclick="alert('ALERT')">Press for alert</button>
            <button onclick="modify()">Click here to change something</button>
            <button onclick="visibility()">Click here to hide/show some text</button>
            <button onmouseenter="img2()" onmouseleave="img1()">Hover over me to break something</button>
            <br/>
            <button onclick="txtchange(this)">click here to change this text</button>

        </center>
        
        <div>
            <br/><br/>
            <h2>Lab 5 PHP:</h2>
            <p><?= var_dump($_SERVER) ?></p>
        </div>
    </body> 
</html>