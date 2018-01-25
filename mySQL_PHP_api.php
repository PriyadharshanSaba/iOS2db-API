<?php
    //mySQL_PHP_api

    //Creator/ Developer Name: Priyadharshan Saba
    //ServerSide Scripting in PHP
    //API for mySQL database connection for mobile applications. Returns data in JSON format
    //Runtime: PHP 7.1.13

    $mysqli = new mysqli("localhost", "user", "password", "database");

    $result = $mysqli->query("  ");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        $conn_status="Failed";
    }
    $conn_status="Success";
    ?>

<html>
<head>
<title>Testing</title>
</head>

<body>


<h1 style="text-align:center">Establishing Connection</h1><br><br>
<?php
    while ($row = $result->fetch_assoc()) {
        $res = $row["USR_ID"];
        echo "<h2 style='text-align:center'> $res </h2>";
    }
    ?>


</body>
</html>

