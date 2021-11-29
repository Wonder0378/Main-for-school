<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            padding-top: 20px;
            padding-left: 30px;
        }
        p {
            padding: 10px;
            font-size: 150%;
            text-decoration: underline solid;
        }
    </style>
</head>
<body>
    <?php
        $numword = new \NumberFormatter("sv", \NumberFormatter::SPELLOUT);
        $maxnumber = 23;
        $word = "Wow";

        for($i=1; $i <= $maxnumber; $i++) {
            echo "<p>$word ", $numword->format($i), "!<br></p>";
        };
                
    ?>
</body>
</html>