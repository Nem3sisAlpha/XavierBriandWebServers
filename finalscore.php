<!DOCTYPE html>

<html>
    <head>
        <title>Final Score</title>
        <?php 
        $player = $_POST["name"];
        $studentid = $_POST["studentid"];
        $diff = $_POST["diff"];
        ?>
    </head>
<body>       
    <h2>Congratulations!</h2><br>
    <h2>You have now completed the game</h2>
    <h3>Welcome <?php echo $player; ?></h3><br>
    <h3>Your student ID is: <?php echo $studentid; ?></h3><br>
    <h4>You set your difficulty to <?php echo $diff; ?></h4><br>
    <h4></h4>

</body>
</html>
