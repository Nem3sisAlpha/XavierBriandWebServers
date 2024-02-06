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
        <select name="main" id="main">
            <option value="" class="default" selected>Choose option</option>
            <option value="2">Easy</option>
            <option value="3">Medium</option>
            <option value="4">Hard</option>
            <option value="5">Custom</option>
        </select>
            <br><br><br>
            Set the speed interval: <input type="text" id="hide" name="speed" required>
        <select name="manufacturer" id="manufacturer"> 
            <option value="" class="default" selected>(select)</option>
            <option value="Manufacturer One">Manufacturer One</option>
            <option value="Manufacturer Two">Manufacturer Two</option>
        </select>
            <br><br>
        <select name="model" id="model"> 
            <option value="" selected>(select)</option>
            <option value="Model One">Model One</option>
            <option value="Model Two">Model Two</option>
        </select>
            <br><br><br>
            
        
            $(function(){
                $("#model").hide();  // By default use jQuery to hide the second modal

                // We can use the change(); function to watch the state of the select box and run some conditional logic every time it's changes to hide or show the second select box
                $("#manufacturer").change(function(){
                    if( $(".default").is(:selected) ){
                        $("#model").hide();
                    } else {
                        $("#model").show();
                    }
                });
            });
        </br></br>
        <h4>For the Leaderboard, click here!</h4>
        <a href="leaderboard.php">Next Page</a>  
        
        <input type="submit" value="submit"/>  

        </form>
    </body>
</html>
