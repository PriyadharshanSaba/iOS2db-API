<?php
    //mySQL_PHP_api  _Client

    //Creator/ Developer Name: Priyadharshan Saba
    //ClientSide Scripting in PHP
    //Runtime: PHP 7.1.13

    $url = "http://localhost/app.php?< data >=< value >"; //append with the required data!

    $client = curl_init($url);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response = curl_exec($client);

    $result = json_decode($response);
    $res=$result->fetched;
    echo "<br><br><h3 style='text-align:center;'>Result => $res </h3><br><br>";

    ?>
