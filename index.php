<!DOCTYPE html>
<html>
    <head>
        <title>Google</title>
        
        <?php 
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "Pictures_Taken";
            $conn = mysqli_connect($server, $username, $password, $database);

            // Check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            
            $sql = "select * from Pictures;";
            $result = mysqli_query($conn, $sql);
        ?>

    </head>
    <body>
        <h1>GOOGLE</h1>
        <h2>THIS IS TOTALLY SAFE</h2>
        <h2>NOT PHISHING YOUR STUFF</h2>
        <h2>BECAUSE IT IS STUFF THAT BAD PEOPLE DO</h2>

        <form action="result.php" method="get">

        <div class="topnav">
        <input id="searchbar" type="text" placeholder="Search..">
        </div>
        </br></br>
        <input type="submit" value="submit"/>  
    </form>