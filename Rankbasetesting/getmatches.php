<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $host = "localhost"; 
    $user = "root";
    $pass = "";
    $dbname = "rankbasedump";
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    
    $regions = array(
        "LEC"=>1.5,
        "LCK"=>1.8,
        "LPL"=>2.0,
        "NA LCS"=>1.0,
        "LMS"=>0.5,
        "LJL"=>0.5,
        "CBLOL"=>0.7,
        "OPL"=>0.5,
        "TCL"=>0.7,
    );

    $competitions = file_get_contents("https://api.sportsdata.io/v3/lol/scores/json/Competitions?key=2aeb06301d9f4544b2738238282de7dd");
    $competitions_decoded = json_decode($competitions, true);

    foreach($competitions_decoded as $competition) {
        $seasons = $competition["Seasons"];
        $competitionname = $competition["Name"];

        foreach($seasons as $season) {
            if($season["CurrentSeason"] == true){
                $rounds = $season["Rounds"];

                foreach($rounds as $round) {
                    $pointreference = 10 * $regions[$competitionname];
                    $roundID = $round["RoundId"];

                    $schedule = file_get_contents("https://api.sportsdata.io/v3/lol/scores/json/Schedule/".$roundID."?key=2aeb06301d9f4544b2738238282de7dd");                    
                    $schedule_decoded = json_decode($schedule, true);
                    $standings = file_get_contents("https://api.sportsdata.io/v3/lol/scores/json/Standings/".$roundID."?key=2aeb06301d9f4544b2738238282de7dd");
                    $standings_decoded = json_decode($standings, true);

                    $getgameID = "SELECT * FROM gameid_table";
                    $resultGameID = mysqli_query($conn, $getgameID);

                    $gameIDs = array();
                    while($row = mysqli_fetch_assoc($resultGameID)) {
                        $gameIDs[] = $row["GameID"];
                    };
                    foreach($standings_decoded as $stand) {
                        $tem = $stand["Name"];
                        $standingscool = "INSERT INTO standings (Team, Points, Competition) VALUES ('$tem', 0, '$competitionname')";
                        mysqli_query($conn, $standingscool);
                    };
                    foreach($schedule_decoded as $match) {
                        if($match["IsClosed"] == true) {

                            if(in_array($match["GameId"], $gameIDs)) {
                                continue;
                            };

                            $gameID = $match["GameId"];
                            $teamA = (string)$match["TeamAName"];
                            $teamB = (string)$match["TeamBName"];
                            $scoreA = $match["TeamAScore"];
                            $scoreB = $match["TeamBScore"];

                            foreach($standings_decoded as $standing) {
                                if($standing["Name"] == $teamA) {
                                    $Aposition = $standing["Order"];
                                };
                                if($standing["Name"] == $teamB) {
                                    $Bposition = $standing["Order"];
                                };
                            };

                            if($scoreA > $scoreB) {
                                $winner = $teamA;
                                if($Aposition > $Bposition) {
                                    $Apoints = $pointreference * 1.2;
                                    $Bpoints = $pointreference * -1.2;
                                }
                                elseif($Bposition > $Aposition) {
                                    $Apoints = $pointreference * 0.8;
                                    $Bpoints = $pointreference * -0.8;
                                }
                                else{
                                    $Apoints = $pointreference;
                                    $Bpoints = $pointreference;
                                };
                            }
                            else{
                                $winner = $teamB;
                                if($Bposition > $Aposition) {
                                    $Bpoints = $pointreference * 1.2;
                                    $Apoints = $pointreference * -1.2;
                                }
                                elseif($Aposition > $Bposition) {
                                    $Bpoints = $pointreference * 0.8;
                                    $Apoints = $pointreference * -0.8;
                                }
                                else{
                                    $Apoints = $pointreference;
                                    $Bpoints = $pointreference;
                                };
                            };
                            $queryMatchID = "INSERT 
                            INTO gameid_table (Competition, GameID, TeamA, TeamB, Winner) 
                            VALUES ('$competitionname', '$gameID', '$teamA', '$teamB', '$winner')";
                            $result = mysqli_query($conn, $queryMatchID); // returns data to database

                            $queryStandings = "SELECT * FROM standings";
                            $standingsResult = mysqli_query($conn, $queryStandings);

                            echo "New Match";

                            while($row = mysqli_fetch_assoc($standingsResult)) {
                                if($row["Team"] == $teamA) {
                                    echo "teamA check!";
                                    $newpoints = $row["Points"] + $Apoints;
                                    $queryStandingsRemove = "DELETE FROM standings WHERE Team = '$teamA'";
                                    $removeStandings = mysqli_query($conn, $queryStandingsRemove);
                                    $queryNewStandings = "INSERT INTO standings (Team, Points, Competition) VALUES ('$teamA', '$newpoints', '$competitionname')";
                                    $insertStanding = mysqli_query($conn, $queryNewStandings);
                                    break;
                                };
                            };
                            while($row = mysqli_fetch_assoc($standingsResult)) {
                                if($row["Team"] == $teamB) {
                                    echo "TeamB check";
                                    $newpoints = $row["Points"] + $Bpoints;
                                    $queryStandingsRemove = "DELETE FROM standings WHERE Team = '$teamB'";
                                    $removeStandings = mysqli_query($conn, $queryStandingsRemove);
                                    $queryNewStandings = "INSERT INTO standings (Team, Points, Competition) VALUES ('$teamB', '$newpoints', '$competitionname')";
                                    $insertStanding = mysqli_query($conn, $queryNewStandings);
                                    break;
                                };
                            };
                        
                        };
                    };

                };

            };

        };

    };
    ?>
</body>
</html>