<?php

    
    // Start the page
    require_once 'views.php';
    require_once 'files.php';
    require_once 'subscriber.php';


    // Log the page load
    require_once 'log.php';
    $log->log_page("Exam 2");

    $content = '<p><a href="pagelog.php">Page log</a></p>
    <p><a href="addalbum.php">Add Album</a></p>';


    // Create main part of page content
    $settings = array(
        "page_title" => "Exam 2", 
        "site_title" => "Exam 2",
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);

    $subscribers->show_subscribers();


?>
