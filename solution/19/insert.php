<?php
    
    // Prevent caching
    header("Pragma: no-cache");
    header("Expires: 0");
    header("Cache-Control: no-store, no-cache, must-revalidate");


    // Connect to the database
    require_once 'subscriber.php';


    // Pick out the inputs
    $name  = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'body');


    // Add record
    if ($subscribers->add ($name, $body)) {
//      echo '<p><b>Insert successful</b>&nbsp;<a href="index.php">Subscribers</a></p>';
//      $this->query();
        header("Location: index.php");
    }

?>

