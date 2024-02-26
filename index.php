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

        <button onclick="myFunction()">Custom</button><br><br>
        <div id="myDIV">
            <input type="submit" id="diff" name="diff" value="Custom"><br><br>
        </div>
        <br><br>

     

        <h4>For the Leaderboard, click here!</h4><br>
        <a href="leaderboard.php">Leaderboard</a>  
        
        <script>
            function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "block") {
            x.style.display = "none";
            } else {
            x.style.display = "block";
            }
            }
        </script>

    </body>
</html>
