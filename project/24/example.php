<?php

    // Start the page
    require_once 'views.php';
 

    // Log the page load
    require_once 'log.php';
    $log->log_page("solution/24/example.php");


    // Page Content
    $settings = array(
        "page_title" => "Page Templates", 
        "site_title" => "BACS 200 Demos",
        "content"    => "NO CONTENT");

    $settings = array(
        "page_title" => "Streetlight Manifesto", 
        "site_title" => "Band Summary",
        "content"    => file_get_contents("band.html"));

    echo render_page($settings);


?>
