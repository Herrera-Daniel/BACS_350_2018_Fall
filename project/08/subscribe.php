<?php
include 'header.php';
include 'db.php';
    $name = filter_input(INPUT_POST, 'my_name');
	$email = filter_input(INPUT_POST, 'my_email');
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo("Email is not valid"); kill();
    }
    //<p>My Name is <?php echo $name;</p>
	//<p>My Email is <?php echo $email;</p>
    
echo '<h2>Add New User</h2>';


// Add database row
$query = "INSERT INTO subscribers (name, email) VALUES (:name, :email);";

$statement = $db->prepare($query);

$statement->bindValue(':name', $name);
$statement->bindValue(':email', $email);

$statement->execute();
$statement->closeCursor();


 //Display subscriber records
include 'select.php';
    // Setup a page title variable
    $page_title = "View to Accept Data";
    // Include the page start
    include 'header.php';

    // Include the page end
    include 'footer.php';
?>