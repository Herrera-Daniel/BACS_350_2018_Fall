<?php

$port = '3306';
$dbname = 'anielhe3_subscribers';
$db_connect = "mysql:host=localhost:$port;dbname=$dbname";
$username = 'anielhe3';
$password = '3Spookie5Me!';

    echo "<h1>DB Connection</h1>" .
        "<p>Connect String:  $db_connect, $username</p>";


    // Open the database or die
    try {
        $db = new PDO($db_connect, $username, $password);
        echo '<p><b>Successful Connection</b></p>';
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        echo "<p>Error: $error_message</p>";
        die();
     }

?>
