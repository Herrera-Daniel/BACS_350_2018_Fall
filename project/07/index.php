<?php
include 'header.php';

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

//INSERT INTO subscribers(name, email);
//VALUES ('Jim Smith', 'jim.smith@unco.edu');



?>
<head>
<title>BACS 350 - Project #7</title>
</head>

<ul>
<li><a href="../01/index.php">Home Page</a></li>
<li><a href="https://github.com/Herrera-Daniel">Git Hub Profile</a></li>

</ul>


<?php
    // Include the page end
    include 'footer.php';
?>