<?php
    $host = "ec2-54-235-123-153.compute-1.amazonaws.com";
    $user = "mvsjgtxaoxwmgp";
    $password = "7b32ce61d22ce32052e233639448ab315708a2c78884b39932dc9ead1b26ef53";
    $dbname = "d1v03ol0gs21v5";
    $port = "5432";
    try{
        //Set DSN data source name
        $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
        //create a pdo instance
        $pdo = new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    $x = 1;
    $y = 2;
    $z= $x + $y;
    ?>


<html>
<head>
<title>Testing</title>
</head>

<body>


<h1>Connection</h1>
<br>
<h3><?php  ?></h3>
<br><br>

</body>
</html>

