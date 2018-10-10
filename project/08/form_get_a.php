<?php

    // Include the page start
    include 'header.php';
?>

    <h2>UI for form input using POST</h2>

    <form action="subscribe.php" method="post">
        <label>What is your name?</label>
        <input type="text" name="my_name">
		<label>What is your email?</label>
		<input type="text" name="my_email">
        <input type="submit" value="Save"/>
    </form>

<?php
    // Include the page end
    include 'footer.php';
?>
