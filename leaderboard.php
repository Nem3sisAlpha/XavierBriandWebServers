<!DOCTYPE html>
<html>
  <head>
    <title>Leaderboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
  </head>
  
  <body>
    <h2>Simon Says Leaderboard</h2>
    <table>
      <tr>
        <th>Rank</th>
        <th>Name</th>
        <th>Score</th>
      </tr>

      <?php 
        $server = "localhost";
        $username = "leader";
        $password = "password";
        $database = "point_score";
        $conn = mysqli_connect($server, $username, $password, $database);

        // Check for successful connection
        if (!$conn) {
          die("Connection failed: {mysqli_connect_error()}");
        }
            
        $sql = "select name, score from leaderboard order by score desc;";
        $result = mysqli_query($conn, $sql);

        $rank = 1;

        if (mysqli_num_rows($result)) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>{$rank}</td>
            <td>{$row['name']}</td>
            <td>{$row['score']}</td></tr>";
            $rank++;
          }
        }
      ?>
    </table>

      
    <br><br><br><br><br><br>

    <h3>You want to improve your score?</h3>
    <h3>Or you simply want to play again?</h3>
    <a href="index.php">Click here if that's the case!</a>

  </body>
</html>

  
