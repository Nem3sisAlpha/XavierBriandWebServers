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

    </br></br>


        <form action="tablechg.php" method="get">
            <label for="pictures1">Select Month to see the amount of pictures taken for the year 2023</label><br/>
            <select id="picturechg" name="picturechg">
                <?php
                    foreach($result as $row) 
                    {
                        echo "<option value='{$row['picture_id']}'> Month: {$row['picture_id']} || Year: 2023 </option>\n";

                    }
                    mysqli_close($conn);
                ?>
            </select></br></br>
            <label for="pics">Enter the new number of pictures for the month and year</label><br/>
            <input type="number" required id="2023pics" name="2023pics" /><br/><br/>
            <input type="submit" value="submit"/>  
        </form>

        </br></br>

        <?php
      
        if(isset($_POST['HI'])) { 
            echo "The value has been set to high!";
            echo `gpio write 26 1`;
        } 
        if(isset($_POST['LO'])) { 
            echo "The value has been set to low!";
            echo `gpio write 26 0`;
        } 
        if(isset($_POST['tgl'])) { 
            echo "The value is now toggling!"; 
            echo `gpio toggle 26`;
        } 
        ?>
        </br></br>
        <form method="post">
            Do you want to control an LED?
            </br>
            Press one of these buttons:
            </br>
            <input type="submit" name="tgl" value="Toggle">
            </br></br>
            <input type="submit" name="HI" value="High">
            </br></br>
            <input type="submit" name="LO" value="Low">
            </br></br>
            <input type="submit" name="inf" value="Info">
        </form>
        </br></br>
        <?php
      
        if(isset($_POST['inf'])) { 
            echo "Here is the requested information:";
            echo "The used sensor is: {$deserialized["sensor"]} <br><br>";
            echo "The humidity levels were at {$deserialized["humidity"]} <br><br>";
            echo "The pressure is at {$deserialized["pressure"]} <br><br>";
            echo "The temperature is at {$deserialized["temperature"]} <br><br>";
            echo "The altitude is at {$deserialized["altitude"]} <br><br>";
        } 
        ?>
        
        </br></br>
            
        <form action="form.php" method="post">
            You may enter your name here <input type="text" id="name" name="name" required> </br></br>
            You also may enter your email address here <input type="text" id="email" name="email" required> </br></br>
            You may enter your birthdate here (DD/MM/YYYY) <input type="text" pattern="\d{2}/\d{2}/\d{4}"> </br></br>
            Do you like photography? <input type="checkbox" name="Yes"> Yes <input type="checkbox" name="No"> No </br></br>
            If yes, what equipment do you use? 
                <select>
                    <option value="1">Choose from these options</option>
                    <option value="2">Your phone</option>
                    <option value="3">A film camera</option>
                    <option value="4">A professional camera</option>
                    <option value="5">Other</option>
                </select> </br></br>
            If you selected no, WHAT ARE YOU DOING HERE? </br></br>

            <input type="submit" value="Submit"> </br></br>
            <input type="button" onclick="location.href='primary.html';" value="Go to the next page">
        </form>
    </body>


</html>
