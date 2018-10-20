<?php

    
    // Start the page
    require_once 'views.php';
//    require_once 'files.php';


//    // Log the page load
//    require_once 'log.php';
//    $log->log_page("solution/26");


    $content = 'This is a test';

    set_error_handler("errorHandler");

    function errorHandler($errno, $errstr) {
        echo "<p>Error $errno: $errstr</p>";
        die();
    }

    try {
        $content = file_get_contents('ReadMe.txt');
        echo 'FILE'.$content.'FILE';
    }
    catch (Exception $e) {
        $error_message = $e->getMessage();
        echo "<p>File Error: $error_message</p>";
        die();
    }
    
   

    // Create main part of page content
    $settings = array(
        "site_title" => "BACS 350 Projects",
        "page_title" => "Pro", 
        "style"      => 'style.css',
//        "style"      => 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        "content"    => $content);

    echo render_page($settings);


?>
