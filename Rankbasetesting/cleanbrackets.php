<?php

    $host = "localhost"; 
    $user = "root";
    $pass = "";
    $dbname = "rankbasedump";
    $conn = mysqli_connect($host, $user, $pass, $dbname);


    $todelete2 = "DELETE FROM gameid_table";
    mysqli_query($conn, $todelete2);


?>