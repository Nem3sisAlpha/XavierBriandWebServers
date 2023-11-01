<!DOCTYPE html>

<html>
    <head>
        <title>SQL - Results</title>
        <?php 
            $rownum = (int)($_GET["picturechg"]);
            $chg = (int)($_GET["2023pics"]);
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "Pictures_Taken";
            $conn = mysqli_connect($server, $username, $password, $database);

            // Check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            
            $sql = "UPDATE Pictures SET 2023pics = {$chg} where pictures_id={$rownum};";
            $result = mysqli_query($conn, $sql);

            $sql = "select * from top where pictures_id={$rownum};";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
<body>
    
    <?php
    foreach($result as $row)
            {
                echo "This month has: {$row['2023pics']} pictures in 2023";
            }
            mysqli_close($conn);
    ?>

</body>
</html>
