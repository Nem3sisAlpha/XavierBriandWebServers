<!DOCTYPE html>

<html>
    <head>
        <title>Results</title>
        <?php 
        $player = $_POST["name"];
        $studentid = $_POST["studentid"];

            
        $server = "localhost";
        $username = "leader";
        $password = "password";
        $database = "point_score";
        $conn = mysqli_connect($server, $username, $password, $database);

        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        } 

        ?>
    </head>
<body>       
    <h3>Welcome <?php echo $player; ?></h3><br>
    <h3>Your student ID is: <?php echo $studentid; ?></h3><br>
    <h4>You set your difficulty to <?php echo $diff; ?></h4><br>
    <h4></h4>

</body>

<?php
    $step = "0";
    $diff = $_POST["diff"];
    $max_patt = 0;


    $start = "S";
    $stop= chr(0x03);

    exec("python3 /home/xavier/python/serialwrite_ascii.py $start");

    while (1)
    {
        $step = exec("python3 /home/xavier/python/ser.rd.py");
        
        sleep(1);

        if ($step == "D")
        {
            //serial writing a ASCII character corresponding to the difficulty setting
            sleep(1);

            if ($diff == "Easy")
            {
                $max_patt = 5;
                $set = "E";
                echo $set;
                exec("python3 /home/xavier/python/serialwrite_ascii.py $set");
            }
    
            elseif ($diff == "Medium")
            {
                $max_patt = 10;
                $set = "M";
                echo $set;
                exec("python3 /home/xavier/python/serialwrite_ascii.py $set");
            }
    
            elseif ($diff == "Hard")
            {
                $max_patt = 15;
                $set = "H";
                echo $set;
                exec("python3 /home/xavier/python/serialwrite_ascii.py $set");
            }
    
            elseif ($diff == "Custom")
            {
                $set = "C";
                echo $set;
                exec("python3 /home/xavier/python/serialwrite_ascii.py $set");
                sleep(1);
                //Serial writing the time interval again from a calculation
    
                exec("python3 /home/xavier/python/serialwrite_ascii.py $time_int");
                exec("python3 /home/xavier/python/serialwrite_ascii.py $stop");
                sleep(1);
                exec("python3 /home/xavier/python/serialwrite_dec.py $time_int");
        
                //serial writing the given time register from a calculation
    
                exec("python3 /home/xavier/python/serialwrite_ascii.py $time_given");
                exec("python3 /home/xavier/python/serialwrite_ascii.py $stop");
                sleep(1);
                exec("python3 /home/xavier/python/serialwrite_dec.py $time_given");
    
                //Serial writing the Max Pattern Value from the Web Configuration
    
                exec("python3 /home/xavier/python/serialwrite_ascii.py $max_patt");
                exec("python3 /home/xavier/python/serialwrite_ascii.py $stop");
                sleep(1);
                exec("python3 /home/xavier/python/serialwrite_dec.py $max_patt");
    
            }
    
            else
                echo "Error Occured During difficulty detection";
        }
    
        elseif ($step == "R")
        {
            //Serial writing the random sequence of numbers
    
            //$max_patt = value set by user on web server
            sleep(1);
    
            for ($x = 0; $x < $max_patt; $x++)
            {
                $rand = exec("python3 /home/xavier/python/rand.py");
                echo $rand;
                exec("python3 /home/xavier/python/serialwrite_ascii.py $rand");
            }
            exec("python3 /home/xavier/python/serialwrite_ascii.py $stop");
    
        }
    
        elseif ($step == "E")
        {
            //Serial reading the end value sent to calculate the final score
    
            //$max_patt = value set by user on web server
    
            //$success received from serial
    
            $max_score = 10000;
    
            $mistakes = exec("python3 /home/xavier/python/ser.rdbytes.py");
            
            sleep(1);

            $success = $max_patt - $mistakes;
    
            if ($success <= $max_patt)
            {
                    $user_score = intval(($success / $max_patt) * $max_score);
    
                    echo "$user_score";

                    header("Location: xavierpi.local:8080/leaderboard.php");
    
                    break;
            }
    
            else
            {
                    echo "ERROR: The number of successful sequences cannot be higher than the max pattern\n";
            }
        }

        $step = "0";
    }

    header("Location: xavierpi.local:8080/leaderboard.php");

?>

</html>
