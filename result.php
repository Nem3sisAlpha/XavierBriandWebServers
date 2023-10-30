<!DOCTYPE html>

<html>
    <head>
        <title>SQL - Results</title>
        <?php 
            $rownum = (int)($_GET["pictures"]);
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "Pictures_Taken";
            $conn = mysqli_connect($server, $username, $password, $database);

            // Check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            
            $sql = "select * from Pictures where pictures_id='{$rownum}';";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
<body>
    You selected Month <?php $rownum ?></br>
    <p><?php mysqli_error($conn)?></p>
    <?php
    foreach($result as $rownum )
            {
                echo "This month has: {$rownum['2019pics']} pictures in 2019, {$rownum ['2020pics']} pictures in 2020, {$rownum['2021pics']} pictures in 2021, {$rownum['2022pics']} pictures in 2022, and {$rownum['2023pics']} pictures in 2023";
            }
            mysqli_close($conn);
    ?>

</body>
</html>