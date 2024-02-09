<!DOCTYPE html>
<html>
    <head>
        <title>Simon Says</title>
    </head>
    <body>
        <h1>Welcome to the new revamped version of the Simon Says game!</h1>
        <h4>In here you will either be able to challenge or go easy on yourself as this game can be either really hard, or really easy depending on the settings you chose</h4>
        </br></br>
        
        <form action="result.php" method="post">
            <h4>You may enter your name here</h4><input type="text" id="name" name="name" required> </br></br>
            <h4>You also may enter your email address here</h4> <input type="text" id="studentid" name="studentid" required> </br></br>
        </form>
        <script>
            function showHideContent(option) {
                //get content
                const contentElement = document.getElementById("customcontent");

                //check option
                if (option === "Custom")
                    contentElement.style.display = "block";
                else 
                    contentElement.style.display = "none";
            }


            
        </script>

        
        <select id="optionSelect" onchange="showHideContent(this.value)">
            <option value="Easy">Easy</option>
            <option value="Medium">Easy</option>
            <option value="Hard">Easy</option>
            <option value="Custom">Easy</option>
        </select>

        <div value="customcontent">
            <h4>Content for Custom Option</h4>

        </div>

        
        </form>
            
        <h4>For the Leaderboard, click here!</h4><br>
        <a href="leaderboard.php">Next Page</a>  
            
    </body>
</html>
