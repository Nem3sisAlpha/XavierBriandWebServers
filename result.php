<!DOCTYPE html>

<html>
    <head>
        <title>SQL - Results</title>
        <?php 
            $content = (int)($_GET["searchbar"]);
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "Pictures_Taken";
            $conn = mysqli_connect($server, $username, $password, $database);

            // Check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            
            $sql = "select * from Pictures';";
            $result = mysqli_query($conn, $sql);
        ?>
    </head>
<body> 
    <p>
        
    <?php echo $content ?></br>

    
    <?php mysqli_error($conn)?></p>
    
</body>
</html>
