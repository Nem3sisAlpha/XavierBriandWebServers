<!DOCTYPE html>
<html>
    <head>
        <title>Simon Says</title>
    </head>
    <body>
        <style>
            #custom {
            display: none;  
            }
        </style>

        <h1>Welcome to the new revamped version of the Simon Says game!</h1>
        <h4>In here you will either be able to challenge or go easy on yourself as this game can be either really hard, or really easy depending on the settings you chose</h4>
        <br>
        
        <div id="presets">

        <form action="result.php" method="post">
            <h4>You may enter your name here</h4><input type="text" id="name" name="name" required> </br></br>
            <h4>You also may enter your Student ID here</h4> <input type="text" id="studentid" name="studentid" required> </br></br>

        <input type="submit" id="diff" name="diff" value="Easy"><br><br>
        <input type="submit" id="diff" name="diff" value="Medium"><br><br>
        <input type="submit" id="diff" name="diff" value="Hard"><br><br>
        
        </form>
        </div>

        <button onclick="myFunction()">Custom</button><br><br>

        <div id="custom">
        <form action="result.php" method="post">

            <h3>It appears you want your game to have customized settings!</h3>

            <h4>You may enter your name here</h4><input type="text" id="name" name="name" required> </br></br>
            <h4>You also may enter your Student ID here</h4> <input type="text" id="studentid" name="studentid" required> </br></br>
            <input type="submit" id="diff" name="diff" value="Custom"><br><br>

        </form>
        </div>

        <h4>For the Leaderboard, click here!</h4><br>
        <a href="leaderboard.php">Leaderboard</a>  
        
        <script>
            function myFunction() {
                var x = document.getElementById("custom");
                var y = document.getElementById("presets");

                if (x.style.display === "block") {
                x.style.display = "none";
                y.style.display = "block";
                } else {
                x.style.display = "block";
                y.style.display = "none";
                }
            }
        </script>

    </body>
</html>
