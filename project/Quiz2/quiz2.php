<?php

    // Start the page
    require_once 'views.php';
 



    // Page Content
    $settings = array(
        "page_title" => "Page Templates", 
        "site_title" => "BACS 200 Demos",
        "content"    => "NO CONTENT");

    $settings = array(
        "page_title" => "Quiz 2", 
        "site_title" => "Git Quiz",
        "content"    => file_get_contents("Quiz2.html"));

    echo render_page($settings);


?>
