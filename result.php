<!DOCTYPE html>

<html>
    <head>
        <title>Results</title>
        <?php 
        $username = ""
        $server = "localhost";
        $username = "leader";
        $password = "password";
        $database = "point_score";
        $conn = mysqli_connect($server, $username, $password, $database);

        // Check for successful connection
        if (!$conn) {
            die("Connection failed: {mysqli_connect_error()}");
        }

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
