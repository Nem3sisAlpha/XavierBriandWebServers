<!DOCTYPE html>

<html>
    <head>
        <title>Results</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
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

        $sql = "insert into leaderboard (name, score) values ('$player', '$final_score');";
        $result = mysqli_query($conn, $sql);

        ?>
    </head>
<body>       
    <h3>Welcome <?php echo $player; ?></h3><br>
    <h3>Your student ID is: <?php echo $studentid; ?></h3><br>
    <h3>You set your difficulty to <?php echo $diff; ?></h3><br>
    <h3>You have <?php echo $timeint; ?> x50 milliseconds, for a grand total of <?php echo $int_res = $timeint * 50; ?> milliseconds between each generated pattern</h3><br>
    <h3>You are given <?php echo $timegiven; ?> x100 milliseconds, for a grand total of <?php echo $give_res = $timegiven * 100; ?> to recreate the pattern</h3><br>
    <h3>You will have a squence of <?php echo $maxpatt; ?> patterns</h3><br><br>
    <h3>Your final score is: <?php echo $final_score; ?></h3><br><br>

    <h3>You want to see your ranking?</h3>
    <a href="leaderboard.php">Click here!</a>  

</body>
</html>
