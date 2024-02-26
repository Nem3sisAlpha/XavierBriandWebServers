<!DOCTYPE html>

<html>
    <head>
        <title>Results</title>
        <?php 
        $player = $_POST["name"];
        $studentid = $_POST["studentid"];
        $diff = $_POST["diff"];
        $timeint = $_POST["timeint"];
        $timegiven = $_POST["timegiven"];
        $maxpatt = $_POST["maxpatt"];
            
        $server = "localhost";
        $username = "leader";
        $password = "password";
        $database = "point_score";
        $conn = mysqli_connect($server, $username, $password, $database);

        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        }
        function refresh_page($seconds = 0) {
            // Set the refresh header
            header("refresh:{$seconds}");
        } 

        ?>
    </head>
<body>       
    <h3>Welcome <?php echo $player; ?></h3><br>
    <h3>Your student ID is: <?php echo $studentid; ?></h3><br>
    <h4>You set your difficulty to <?php echo $diff; ?></h4><br>
    <h4>You have <?php echo $timeint; ?> second(s) between each generated pattern</h4><br>
    <h4>You are given <?php echo $timegiven; ?> second(s) to recreate the pattern</h4><br>
    <h4>You will have a squence of <?php echo $maxpatt; ?> patterns</h4><br>
    <h4></h4>
        
    
    <?php
    // Call the refresh_page() function with 5 seconds as the parameter
    refresh_page(5);
    ?>

</body>
</html>
