<!DOCTYPE html>
<html>
    <head>
        <title>INTERROGATION</title>
        
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
        <h1>HALT</h1>
        <h2>You must be judged by the judging bird before entering this website</h2>

        <h3>Recorded amount of pictures taken monthly per year</h3>
        <form action="result.php" method="get">

        <div class="topnav">
        <a class="active" href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#contact">Contact</a>
        <input type="text" placeholder="Search..">
        </div>

        <select id="pictureinfo" name="pictureinfo">
            <?php
                foreach($result as $row) 
                {
                    echo "<option value='{$row['picture_id']}'> Month: {$row['picture_id']}</option>\n";
                }
            ?>
        </select>
            </br></br>
        <input type="submit" value="submit"/>  
    </form>