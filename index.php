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
        <select>
            <option value="1">Easy</option>
            <option value="2">Medium</option>
            <option value="3">Hard</option>
            <option value="4">Custom</option>
        </select> </br></br>

            
    <form action="result.php" method="post">

        <div class="topnav">
        <input id="searchbar" name="searchbar" type="text" placeholder="Search..">
        </div>
        </br></br>
        <input type="submit" value="submit"/>  

    </form>
    </body>
</html>
