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
            
            $raw = `./bme280/bme280`;
            $deserialized = json_decode($raw, true);

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
        <img src="https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/Images%20Lab%201/VAX05085.jpg?raw=true" width="800" height="1200"/>
        <h2>You must be judged by the judging bird before entering this website</h2>

        <h3>Recorded amount of pictures taken monthly per year</h3>
        <form action="result.php" method="get">
        <label for="pictures">Select Month to see the amount of pictures taken per year:</label><br/>
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