<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rtd.css">
    <title>Document</title>
</head>
<body>
    <?php
        $date = "2021-01-01";
        $score = "50";
        $year = random_int(2000, 2021);
        $month = random_int(1, 12);
        $day = random_int(1, 29);

        if($day<10) {
            $day = "0$day";
        };
        if($month<10) {
            $month = "0$month";
        };

        if(isset($_POST["skicka"])) {
            if(isset($_POST["datum"])) {
                $date = $_POST["datum"];
            } else {
                $date = "";
            };

            if(isset($_POST["range"])) {
                $score = $_POST["range"];
            } else {
                    $score = "0";
            };
        };
        $randomday = "$year-$month-$day";
    ?>
    <h1>Rate the date!</h1>
    <form action="RateTheDate.php" method="post">
        <div class="slider">
            <input type="date" id="datum" name="datum" value="<?=$randomday?>">
            <input type="range" id="range" name="range" min="0" max="100" oninput="this.nextElementSibling.value = this.value">
            <output>50</output>
        </div>
        <input type="submit" id="skicka" name="skicka" value="Skicka">
    </form>
    <h3><?=$date?> var en <?=$score?>/100 dag</h3>
</body>
</html>