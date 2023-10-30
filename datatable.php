<!DOCTYPE html>

<html>
    <head>
        <title>SQL Data Table</title>
        <?php 
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "Pictures_Taken";
            $conn = mysqli_connect($server, $username, $password, $database);

            // Check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            
            $sql = "select * from Pictures";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
<body>
    </h3>Data Table</h3>
        <label for="Pictures">Select the month to see the number of pictures taken per year:</label><br/>
        <select id="pictures_table" name="pictures_table">
            <?php
            foreach($result as $row) {
                echo "Month: {$row["pictures_id"]} || Pictures taken in 2019: {$row["2019pics"]} || Pictures taken in 2020: {$row["2020pics"]} || Pictures taken in 2021: {$row["2021pics"]} || Pictures taken in 2022: {$row["2022pics"]} || Pictures taken in 2023: {$row["2023pics"]}\n"; }
            
            ?>
        </select>
</body>
</html>