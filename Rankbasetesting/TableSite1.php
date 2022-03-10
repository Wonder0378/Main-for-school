<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="TableSite1.css">
    <?php
    
    $host = "localhost"; 
    $user = "root";
    $pass = "";
    $dbname = "rankbasedump";
    $conn = mysqli_connect($host, $user, $pass, $dbname);

    ?>
</head>
<body>
    <div class="tables">
        <div class="teamranking">
            <h3>Team Rankings</h2>
            <?php
            // Table which showcases the top ten teams globally

            $getteams = "SELECT * FROM standings ORDER BY points DESC LIMIT 10";
            $teams = mysqli_query($conn, $getteams);

            while($row = mysqli_fetch_assoc($teams)) {
                echo "
                <nav id=".'team'." >
                    <a href=".''.">".$row['Team']."</a>
                </nav>";
            };
            ?>
        </div>
        <div class="winnersOfTheWeek">
            <h3>Teams to look out for</h2>
        </div>
        <div class="playerranking">
            <h3>Player Rankings</h2>
        </div>
    </div>
</body>
</html>