<!DOCTYPE html>
<html>
    <head>
        <title>Simon Says</title>
    </head>
    <body>
        


        <h1>Welcome to the new revamped version of the Simon Says game!</h1>
        <h4>In here you will either be able to challenge or go easy on yourself as this game can be either really hard, or really easy depending on the settings you chose</h4>
        </br>

        <form action="result.php" method="post">
            <h4>You may enter your name here</h4><input type="text" id="name" name="name" required> </br></br>
            <h4>You also may enter your Student ID here</h4> <input type="text" id="studentid" name="studentid" required> </br></br>

        <input type="submit" id="diff" name="diff" value="Easy"><br><br>
        <input type="submit" id="diff" name="diff" value="Medium"><br><br>
        <input type="submit" id="diff" name="diff" value="Hard"><br><br>
        
        </form>

        <button onclick="visibility()">Custom</button>



        <img id="AngryPingu" src="https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/WebServers/bme280/Images%20Lab%204/Angry%20Pingu.jpg" width="671" height="417"/>

        <form>

        <input type="submit" id="diff" name="diff" value="Custom"><br><br>
        </form>
     
      
        

        <h4>For the Leaderboard, click here!</h4><br>
        <a href="leaderboard.php">Leaderboard</a>  
        
        <script>
            function visibility() {
                var x = document.getElementById("AngryPingu");
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
                else {
                    x.style.display = "none";
                }
            }
        <script>

    </body>
</html>
