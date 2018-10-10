<?php
    $name = filter_input(INPUT_POST, 'my_name');
	$email = filter_input(INPUT_POST, 'my_email');
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("Email is not valid"); kill();
}
    // Setup a page title variable
    $page_title = "View to Accept Data";
    // Include the page start
    include 'header.php';
?>
    <h2>My Name is <?php echo $name; ?></h2>
	<h2>My Email is <?php echo $email; ?></h2>
<?php
    // Include the page end
    include 'footer.php';
?>