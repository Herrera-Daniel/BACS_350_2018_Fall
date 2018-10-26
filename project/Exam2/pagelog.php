<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'Exam 2 Log page';
    $page_title = 'Display Pages loaded';
    begin_page($site_title, $page_title);


    // Page Content
    echo '<p><a href="index.php">Exam 2</a></p>';
      

    // Handle any actions required
    require_once 'log.php';
    $log->handle_actions();
    

    // Show page history
    $log->show_log();


    // Clear the list by sending "action" of "clear" to this view
    echo '<p><a href="pagelog.php?action=clear" class="btn">Clear Log</a></p>';


    end_page();
?>
