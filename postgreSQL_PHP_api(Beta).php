<?php
    //postgreSQL_PHP_api(Beta)

    //Creator/ Developer Name: Priyadharshan Saba
    //ServerSide Scripting in PHP
    //API for PostgreSQL database connection for mobile applications. Returns data in JSON format
    //Runtime: PHP 7.1.13
    ?>
<?php
    $host = "";
    $user = "";
    $password = "";
    $dbname = "";
    $port = "";


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
    ?>


<html>
<head><title>Testing</title></head><body>
<h1>Connection</h1>
<h3><?php   ?></h3>
</body>
</html>

