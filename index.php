<!DOCTYPE html>
<html>
    <head>
        <title>Simon Says</title>
    </head>
    <body>
        <h1>Welcome to the new revamped version of the Simon Says game!</h1>
        <h4>In here you will either be able to challenge or go easy on yourself as this game can be either really hard, or really easy depending on the settings you chose</h4>
        </br></br>
        <h4>Choose your game difficulty<h4>
            
        <form action="game.php" method="post">
        <select>
            <option value="1">Easy</option>
            <option value="2">Medium</option>
            <option value="3">Hard</option>
            <option value="4">Custom</option>
        </select>
        </br></br>
        <h4>For the Leaderboard, click here!</h4>
        <a href="leaderboard.php">Next Page</a>  
        
        <input type="submit" value="submit"/>  

        </form>
    </body>
</html>
