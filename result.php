<!DOCTYPE html>

<html>
    <head>
        <title>Results</title>
        <?php 
        $player = $_POST["name"];
        $studentid = $_POST["studentid"];
        $diff = $_POST["diff"];

            
        $server = "localhost";
        $username = "leader";
        $password = "password";
        $database = "point_score";
        $conn = mysqli_connect($server, $username, $password, $database);

        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        } 

        $final_score = shell_exec("php /home/xavier/php/settings.php $diff");

        ?>
    </head>
<body>       
    <h3>Welcome <?php echo $player; ?></h3><br>
    <h3>Your student ID is: <?php echo $studentid; ?></h3><br>
    <h3>You set your difficulty to <?php echo $diff; ?></h4><br><br>
    <h3>Your final score is:<?php echo $final_score; ?></h3>

</body>
</html>
