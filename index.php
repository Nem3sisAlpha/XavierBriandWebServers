<!DOCTYPE html>
<html>
    <head>
        <title>Simon Says</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    </head>
    <body>
        <style>
            #custom {
            display: none;  
            }
        </style>

        <h1>Welcome to the new revamped version of the Simon Says game!</h1>
        <h4>In here you will either be able to challenge or go easy on yourself as this game can be either really hard, or really easy depending on the settings you chose</h4>
        </br>
        
        <div id="presets">

        <form action="result.php" method="post">
            
            <h3>Difficulty Presets</h3>

            <h4>You may enter first your name here</h4><input type="text" id="name" name="name" required> </br></br>
            <h4>You also may enter your Student ID here</h4> <input type="text" id="studentid" name="studentid" required> </br></br>

        <input type="submit" id="diff" name="diff" value="Easy"><br><br><br><br>
        <input type="submit" id="diff" name="diff" value="Medium"><br><br><br><br>
        <input type="submit" id="diff" name="diff" value="Hard"><br><br><br><br>
        
        </form>
        
        </div>
        
        <button class="text-zinc-700 hover:text-green-600 backdrop-blur-lg bg-gradient-to-tr from-transparent via-[rgba(121,121,121,0.16)] to-transparent rounded-md py-2 px-6 shadow hover:shadow-green-600 duration-700" onclick="myFunction()">
            Custom
        </button>
        <br><br>

        <div id="custom">
        <form action="custom_result.php" method="post">

            <h3>It appears you want your game to have customized settings!</h3>

            <h4>You may enter your name here</h4><input type="text" id="name" name="name" required> </br></br>
            <h4>You also may enter your Student ID here</h4><input type="text" id="studentid" name="studentid" required> </br></br>


            <h4>Enter the time interval between each pattern (/your value\ x 50 ms)</h4><input type="text" id="timeint" name="timeint" required> </br></br>
            <h4>Enter the time given to you to recreate the pattern (/your value\ x 100 ms)</h4><input type="text" id="timegiven" name="timegiven" required> </br></br>
            <h4>Enter the maximum number of pattern you want</h4><input type="text" id="maxpatt" name="maxpatt" required> </br></br>

            <input type="submit" id="diff" name="diff" value="Custom"><br><br>

        </form>
        </div>

        <h4>For the Leaderboard...</h4><br>
        <a href="leaderboard.php">Click here!</a>  
        
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
