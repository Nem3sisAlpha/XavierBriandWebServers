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

        $final_score = shell_exec("php /home/xavier/php/custom_settings.php $diff $timeint $timegiven $maxpatt");

        ?>
    </head>
<body>       
    <h3>Welcome <?php echo $player; ?></h3><br>
    <h3>Your student ID is: <?php echo $studentid; ?></h3><br>
    <h3>You set your difficulty to <?php echo $diff; ?></h3><br>
    <h4>You have <?php echo $timeint; ?> x50 milliseconds, for a grand total of <?php echo $int_res = $timeint * 50; ?> milliseconds between each generated pattern</h4><br>
    <h4>You are given <?php echo $timegiven; ?> x100 milliseconds, for a grand total of <?php echo $give_res = $timegiven * 100; ?> to recreate the pattern</h4><br>
    <h4>You will have a squence of <?php echo $maxpatt; ?> patterns</h4><br><br>
    <h3>Your final score is: <?php echo $final_score; ?></h3>
    
</body>
</html>
