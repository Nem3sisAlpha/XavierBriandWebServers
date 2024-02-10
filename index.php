<!DOCTYPE html>
<html>
    <head>
        <title>Simon Says</title>
    </head>
    <body>
        <h1>HALT</h1>
        <img src="https://github.com/Nem3sisAlpha/XavierBriandWebServers/blob/main/Images%20Lab%201/VAX05085.jpg?raw=true" width="800" height="1200"/>
        <h2>You must be judged by the judging bird before entering this website</h2>

        <h3>Recorded amount of pictures taken monthly per year</h3>
        <form action="result.php" method="get">
        <label for="pictures">Select Month to see the amount of pictures taken per year:</label><br/>
        <select id="pictureinfo" name="pictureinfo">
            <?php
                foreach($result as $row) 
                {
                    echo "<option value='{$row['pictures_id']}'> Month: {$row['pictures_id']}</option>\n";
                }
                mysqli_close($conn);
            ?>
        </select>
            </br></br>
        <input type="submit" value="submit"/>  
    </form>

    </br></br>


        <form action="tablechg.php" method="get">
            <label for="pictures1">Select Month to see the amount of pictures taken for the year 2023</label><br/>
            <select id="picturechg" name="picturechg">
                <?php
                    foreach($result as $row) 
                    {
                        echo "<option value='{$row['pictures_id']}'> Month: {$row['pictures_id']} || Year: 2023 </option>\n";

                    }
                    mysqli_close($conn);
                ?>
            </select></br></br>
            <label for="pics">Enter the new number of pictures for the month and year</label><br/>
            <input type="number" required id="2023pics" name="2023pics" /><br/><br/>
            <input type="submit" value="submit"/>  
        </form>

        
        <h4>For the Leaderboard, click here!</h4><br>
        <a href="leaderboard.php">Next Page</a>  
            
    </body>
</html>
