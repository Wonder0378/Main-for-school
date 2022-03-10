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
    $weirdTeamNames = array(
        "DAMWON Gaming"=>"DWG KIA",
        "Nongshim RF"=>"Nongshim RedForce",
        "SANDBOX Gaming"=>"Liiv SANDBOX",
        "DragonX"=>"DRX",
        "afreeca Freecs"=>"Kwangdong Freecs",
        "FURIA Uppercut"=>"FURIA Esports",
        "Netshoes Miner"=>"Netshoes Miners",
        "LG Dire Wolves"=>"Dire Wolves",
        "Bahçeşehir SuperMassive"=>"SuperMassive Blaze",
        "TT"=>"TT Gaming"
    );
    $weirdTeams = array(
        "DAMWON Gaming",
        "Nongshim RF",
        "SANDBOX Gaming",
        "DragonX",
        "afreeca Freecs",
        "FURIA Uppercut",
        "Netshoes Miner",
        "LG Dire Wolves",
        "Bahçeşehir SuperMassive",
        "TT"
    );

    if(in_array("DAMWON Gaming", $weirdTeams)) {
        echo $weirdTeamNames["DAMWON Gaming"];
    };
    
    ?>
</body>
</html>