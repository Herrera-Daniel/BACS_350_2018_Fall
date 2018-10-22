<?php

    
    // Start the page
    require_once 'views.php';


    // Log the page load
    require_once 'log.php';
    $log->log_page("solution/26");
  

    // -----------------------------
    //  ERRORS
    // -----------------------------
    
    // There are two types of errors that are handled in PHP.
    // Learn to use each of them with the following examples.


    // -----------------------------
    // Handle File Errors

    set_error_handler("errorHandler");

    function errorHandler($errno, $errstr) {
        echo "<p>Error $errno: $errstr</p>";
        $log->log_page("File Error: $errstr");
        die();
    }

    $path = 'page.html';
    $text = file_get_contents($path);
    $log->log_page("File read: $path\n$text");


    // -----------------------------
    // Handle Database Errors
    
    function db_connect($db_connect, $username, $password) {
        try {
            $db = new PDO($db_connect, $username, $password);
            $log->log_page("Database connect: $db_connect");
            return $db;
        } 
        catch (PDOException $e) {
            $error_message = $e->getMessage();
            $log->log_page("Database Error: $error_message");
            echo "<p>Error: $error_message</p>";
            die();
        }
     }

    // -----------------------------
    // Cookies
    // -----------------------------


/*
    // Handle first time
    
    if (isset('FIRST_TIME')) {
        show_intro();
    }
    
    set_cookie ('FIRST_TIME');
    
    // Handle Shopping Cart
    
    if (isset('SHOPPING')) {
        show_shopping_cart();
    }
    
    if (choose_items){
        set_session ('SHOPPING');
    }
    if (cancel_items) {
        set_session ('SHOPPING');
    }
    
    show_content();
*/  
   
    $content = 'This is a test';

    // Create main part of page content
    $settings = array(
        "site_title" => "BACS 350 Projects",
        "page_title" => "Pro", 
        "style"      => 'style.css',
//        "style"      => 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css',
        "content"    => $content);

    echo render_page($settings);


?>
