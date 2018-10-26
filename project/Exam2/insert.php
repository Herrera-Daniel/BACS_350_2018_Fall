<?php


    // Connect to the database
    require_once 'subscriber.php';


    // Pick out the inputs
    $artist  = filter_input(INPUT_POST, 'artist');
    $name = filter_input(INPUT_POST, 'name');
    $artwork = filter_input(INPUT_POST, 'artwork');
    $purchase = filter_input(INPUT_POST, 'purchase');
    $description = filter_input(INPUT_POST, 'description');
    $review = filter_input(INPUT_POST, 'review');


    // Add record
    if ($subscribers->add ($artist, $name, $artwork, $purchase, $description, $review)) {
      //echo '<p><b>Insert successful</b>&nbsp;<a href="index.php">Subscribers</a></p>';
//      $this->query();
        header("Location: index.php");
    }

?>

