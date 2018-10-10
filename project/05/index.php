<?php include "header.php"; ?>
<head>
<title>Lesson 5 POST</title>
    <p>
            This is my <a href="../../index.php">home page</a>
            for the UNC BACS 350 class.
        </p>
		
		<?php
    // Setup a page title variable
    $page_title = "Form View (to Post Data)";
?>
    <h2>UI for form input using POST</h2>
    <form action="subscribe.php" method="post">
        <label>What is your name?</label>
        <input type="text" name="my_name">
		<label>What is your email?</label>
		<input type="text" name="my_email">
        <input type="submit" value="Save"/>
    </form>
		
<?php include "footer.php"; ?>