<?php

    // Connect to the database
    require_once 'subscriber_db.php';
    $db = subscribers_connect();


    // Pick out the inputs
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');


    // Add record
    add_subscriber ($db, $name, $email, 'index.php');

?>
