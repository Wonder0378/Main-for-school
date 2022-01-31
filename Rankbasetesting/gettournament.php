<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id='info'>Rankbase Testing Grounds</h1>
    <div class="data"> 
        <?php
            // Estabilishing connection to MySQL database
            $host = "localhost"; 
            $user = "root";
            $pass = "";
            $dbname = "rankbasedump";
            $conn = mysqli_connect($host, $user, $pass, $dbname);

            // Time of use reference
            $t = time();
            $info3 = date("Y-m-d", $t);
            $info3 = "2022-02-24";

            // When button is pressed
            if(isset($_POST["submitbtn"])){
                $fetchForCheck = "SELECT * FROM activememberships ORDER BY date DESC LIMIT 3";
                $checkResults = mysqli_query($conn, $fetchForCheck); // fetches data from database (reference time data)

                // Compares time of use to the last updated time in the database
                while($row = mysqli_fetch_assoc($checkResults)) {
                    if($info3 > $row['date']) {
                        
                        // Fetches data from API
                        $string = file_get_contents('https://api.sportsdata.io/v3/lol/scores/json/Teams?key=2aeb06301d9f4544b2738238282de7dd');
                        $json = json_decode($string, true); // Decodes json

                        foreach($json as $myData) { // goes through the JSON as if it was an array
                            $info = $myData['Name'];
                            $info2 = $myData['AreaName'];
                            $query = "INSERT INTO activememberships (team, region, date) VALUES ('$info', '$info2', '$info3')";
                            $result = mysqli_query($conn, $query); // returns data to database
                        };
                        require_once 'getmatches.php';
                        break;
                    };
                };
            };

        ?>
    </div>
    <form name="test" id="test" action="gettournament.php" method="post">
        <button type="submit" name="submitbtn" id="submitbtn" value="Skicka">Uppdatera</button>
    </form>

    <?php
    $fetch = "SELECT * FROM activememberships ORDER BY date DESC LIMIT 5";
    $result = mysqli_query($conn, $fetch);
    while($rad = mysqli_fetch_assoc($result)) {
        echo "<p>",$rad['team']," from ",$rad['region'], ", Date: ", $rad['date'], "</p>";
    };

    $conn->close();
    ?>
</body>
</html>