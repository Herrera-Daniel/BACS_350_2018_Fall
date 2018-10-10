<?php

    // Connect to the remote database
    function remote_connect() {

        $port = '3306';
        $dbname = 'anielhe3_subscribers';
        $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
        $username = 'anielhe3';
        $password = '3Spookie5Me!';
        return subscribers_connect($db_connect, $username, $password);

    }


    // Local Host Database settings
    function local_connect() {

        $host = 'localhost';
        $dbname = 'subscribers';
        $username = 'root';
        $password = '';
        $db_connect = "mysql:host=$host;dbname=$dbname";
        return subscribers_connect($db_connect, $username, $password);

    }
    ?>