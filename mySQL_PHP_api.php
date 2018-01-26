<?php
    //mySQL_PHP_api

    //Creator/ Developer Name: Priyadharshan Saba
    //ServerSide Scripting in PHP
    //API for mySQL database connection for mobile applications. Returns data in JSON format
    //Runtime: PHP 7.1.13

    
    header("Content-Type:application/json");

    //Checks the URL for attributes sent via GET method
    if(!empty($_GET['userid']))
    {
        $user=$_GET['userid'];
        $res = fetchFromDB($user);

        //response in JSON
        if(empty($res))
        {
            jsonResponse(200,"Not Found",NULL);
        }
        else
        {
            jsonResponse(200,"Found",$res);
        }
    }
    else
    {
        jsonResponse(400,"Invalid Request",NULL);
    }

    //the function to fetch details from Database
    function fetchFromDB($user)
    {
        //mySQL connector
        $mysqli = new mysqli("localhost", "user", "password", "database");
        $result = $mysqli->query("  "); //Query field
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            $conn_status="Failed";
        }
        $conn_status="Success";
        while ($row = $result->fetch_assoc()) {
            $res = $row["USR_PSW"];
        }
        return $res;
    }

    function jsonResponse($status,$status_message,$data)
    {
        //JSON format
        $response['status']=$status;
        $response['status_message']=$status_message;
        $response['fetched']=$data;

        $json_response = json_encode($response);
        echo $json_response;
    }

?>


