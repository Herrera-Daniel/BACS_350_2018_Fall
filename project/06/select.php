<?php

    // Connect to the database
    require_once 'db.php';


    // Query for all subscribers
    $query = "SELECT * FROM subscribers";

    $statement = $db->prepare($query);
    $statement->execute();


    // Loop over all of the subscribers to make a bullet list
    $subscribers = $statement->fetchAll();
    echo '<ul>';
    foreach ($subscribers as $s) {
        echo '<li>' . $s['name'] . ', ' . $s['email'] . '</li>';
    }
    echo '</ul>';

?>
