<?php

/*
    General database connection.  This design works for either local or remote
    database connections.  It automatically determines which is needed at 
    execution time.
    
    Usage:
        require_once 'db.php';
<<<<<<< HEAD
        $db = connect_database();
=======
>>>>>>> ec36bab4dd9144d04b02b934363ec127aa69e8e8
        
*/


    // Connect to the remote database
    function remote_connect() {

        $port = '3306';
<<<<<<< HEAD
        $dbname = 'anielhe3_bacs350';
=======
<<<<<<< HEAD
        $dbname = 'subscribers';
=======
        $dbname = 'uncobacs_350';
>>>>>>> ec36bab4dd9144d04b02b934363ec127aa69e8e8
>>>>>>> a5d21339f69c82fcc7c8d83f16e13956842d7aa1
        $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
        $username = 'anielhe3';
        $password = '3Spookie5Me!';
        return db_connect($db_connect, $username, $password);

    }


    // Local Host Database settings
    function local_connect() {

        $host = 'localhost';
        $dbname = 'bacs350';
        $username = 'root';
        $password = '';
        $db_connect = "mysql:host=$host;dbname=$dbname";
        return db_connect($db_connect, $username, $password);

    }


    // Open the database or die
    function db_connect($db_connect, $username, $password) {
        
        // Enable these echo statements to debug the connection.
        //  echo "<h2>DB Connection</h2><p>Connect String:  $db_connect, $username, $password</p>";
        try {
            $db = new PDO($db_connect, $username, $password);
            // echo '<p><b>Successful Connection</b></p>';
            return $db;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }

    }


    // Open the database or die
    function connect_database() {
        
        $local = ($_SERVER['SERVER_NAME'] == 'localhost');
        if ($local) {
            return local_connect();
        } 
        else {
            return remote_connect();
        }
        
    }

    // Create a connection

    $db = connect_database();

?>
