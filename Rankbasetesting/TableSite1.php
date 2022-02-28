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
<header>
    <div class="title">
        <img src="https://cdn.discordapp.com/attachments/620640764401287168/940594485002399834/company_logo2.PNG" alt="">
        <h1>RankBase</h1>
    </div>
    <nav id="headnav">
        <a href="">Esports</a>
        <a href="">News</a>
        <a href="">About Us</a>
        <a href="">Contact Us</a>
    </nav>
        <nav id="gallery">
            <a id="LEC" href="">
                <img src="https://upload.wikimedia.org/wikipedia/commons/c/c6/League_of_Legends_LEC_logo.png" alt="">
            </a>
            <a id="LCS" href="">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a9/LCS_2021.png" alt="">
            </a>
            <a id="LCK" href="">
                <img src="https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/f/f8/LCK_2021_logo.png" alt="">
            </a>
            <a id="LPL" href="">
                <img src="https://egamersworld.com/uploads/tournaments/lpl-spring-2021-group-sta1609769537876-logo.png" alt="">
            </a>
        </nav>
        <div class="click" id="left">
            <img src="https://www.maxpixel.net/static/photo/1x/Sign-Back-Arrow-Symbol-Icon-Left-35386.png" alt="">
        </div>
        <div class="click" id="right">
            <img src="https://www.maxpixel.net/static/photo/1x/Sign-Back-Arrow-Symbol-Icon-Left-35386.png" alt="">
        </div> 
        <img id="Bg" src="https://cdn.staticcrate.com/stock-hd/effects/footagecrate-4k-looping-network-tech-background-red-1-prev-full.png" alt="">
</header>
<body>
    <div class="betweenmenu">
        <nav>
            <a href="">Teams</a>
            <a href="">Players</a>
            <a href="">Regions</a>
        </nav>
    </div>
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
<footer>
    <div class="foottable">
        <div class="foottitle">
            <h2>©Rankbase 2022</h2>
        </div>
        <nav>
            <a href="">Contact Us</a>
            <a href="">About Us</a>
        </nav>
    </div>
</footer>
<script src="tablesite.js"></script>
</html>