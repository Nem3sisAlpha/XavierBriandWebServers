<!DOCTYPE html>

<html>
    <head>
        <title>SQL - Results</title>
        <?php 
            $rownum = (int)($_GET["pictureinfo"]);
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
    foreach($result as $row)
            {
                echo "This month has: {$row['2019pics']} pictures in 2019, {$row['2020pics']} pictures in 2020, {$row['2021pics']} pictures in 2021, {$row['2022pics']} pictures in 2022, and {$row['2023pics']} pictures in 2023";
            }
            mysqli_close($conn);
    ?>

</body>
</html>