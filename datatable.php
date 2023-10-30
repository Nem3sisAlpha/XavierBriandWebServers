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
            
            $sql = "select * from Pictures;";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
<body>
    </h3>Data Table</h3>
        <form action="result.php" method="get">
            <label for="Pictures">Select the month to see the number of pictures taken per year:</label><br/>
            <select id="pictures_table" name="pictures_table">
                <?php
                foreach($result as $row) {
                    echo "<option value='{$row['pictures_id']}'> Month: {$row['anime_top_number']}\n";
                }
                mysqli_close($conn)
                ?>
            </select>
        </form>
</body>
</html>