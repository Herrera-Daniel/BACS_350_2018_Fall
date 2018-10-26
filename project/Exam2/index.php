<?php

    
    // Start the page
    require_once 'views.php';
    require_once 'files.php';
    require_once 'subscriber.php';


    // Log the page load
    require_once 'log.php';
    $log->log_page("Exam 2");



    
    // Create cards for Page

    // table

    echo '<p><a href="pagelog.php">Page log</a></p>';
    echo '<p><a href="addalbum.php">Add Album</a></p>';


    $content = "";


    // Create main part of page content
    $settings = array(
        "page_title" => "Exam 2", 
        "site_title" => "Exam 2",
        "style"      => 'style.css',
 //       "style"      => 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        "content"    => $content);

    echo render_page($settings);

    $subscribers->show_subscribers();


?>
