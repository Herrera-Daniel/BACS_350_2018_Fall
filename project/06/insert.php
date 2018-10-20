<?php

    // Connect to the database
    require_once 'db.php';


    // Add database row
    $query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";

    $statement = $db->prepare($query);

    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);

    $statement->execute();
    $statement->closeCursor();

?>
