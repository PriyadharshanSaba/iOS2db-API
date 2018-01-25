<?php
    $host = "ec2-54-235-123-153.compute-1.amazonaws.com";
    $dbname = "d1v03ol0gs21v5";
    $user = "mvsjgtxaoxwmgp";
    $password = "7b32ce61d22ce32052e233639448ab315708a2c78884b39932dc9ead1b26ef53";
    $port = "5432";

    $dsn = "pgsql:host=$host;dbname=$dbname;user=$user;port=$port;password=$password";

    $db = new PDO($dsn);

    if($db){
        echo "Connected <br />".$db;
    }else {
        echo "Not connected";
    }
    ?>


<html>
<head>
    <title>Testing</title>
</head>

<body>

<h1>Connection</h1>
<br>
<h3><?php echo $result ?></h3>

</body>
</html>
