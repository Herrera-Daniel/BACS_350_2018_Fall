<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'Exam 2';
    $page_title = 'Add album';
    begin_page($site_title, $page_title);


    // Page Content
    echo '<p><a href="index.php">Exam 2</a></p>';

    
    // Bring in subscribers logic
    require_once 'subscriber.php';
   

    // Show the add form
    $subscribers->add_form();


    // Button to clear
    echo '<a href="delete.php">Reset Albums</a>';


    end_page();
?>