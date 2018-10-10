<?php
    // Connect to the database
    require_once 'db.php';
    echo '<h2>Update Test User</h2>';
    // Data for record
    $name = 'Smith Bob';
    $email = 'updatedBob@gmail.com';
    // Modify database row
    $query = "UPDATE subscribers SET name = :name, email = :email WHERE id = 8";
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $statement->closeCursor();
    // Display subscriber records
    require 'select.php';
?>