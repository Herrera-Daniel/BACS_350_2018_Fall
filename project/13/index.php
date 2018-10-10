<?php

require_once 'views.php';

$site_title = 'BACS 350 - Demo Server';
$page_title = 'Page Logging';
begin_page($site_title, $page_title);

    echo '<h1>My Book List</h1>';

    // Connect to the database
    require 'db.php';


    // Show the list after the insert
    require 'select.php';


    // Add a record
    echo '<a href="insert.php">Add a Book</a>';

    echo '<form action="insert.php" method="get">
        
        <p><label>Title:</label> &nbsp; <input type="text" name="title"></p>
        <p><label>Author:</label> &nbsp; <input type="text" name="author"></p>
        <p><label>Summary:</label> &nbsp; <input type="text" name="summary"></p>
        
        <p><input type="submit" value="Add Book"/></p>
        
    </form>';

    echo '<h1>Project Notes</h1>';

    // Display the To Do list during development
    require 'todo.html';

    // Show links for page testing
    require 'test.php';


    // End the page
    end_page();
?>