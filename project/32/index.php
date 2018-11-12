<?php

    /*
        album List Demo
        
        This code demonstrates the use of the datatype template for quickly
        implmenting a fully functional application.
        
        It is based around a single view that has controller logic to run
        all of the operations and display all of the UI views at the proper
        times.
        
        Clone this template and change "album" to "my_data" to implement
        your own datatype.
    */

    require_once 'log.php';
    require_once 'views.php';
    require_once 'subscriber.php';


    // Log the page load
    $log->log_page();
    $content = render_button('Home', 'index.php');
    $content .= render_button('Register', 'index.php?id=1&action=register');
    $content .= render_button('Login', 'index.php?id=1&action=login');
    $content .= render_button('Show Log', 'pagelog.php');

    // Display the page content
    $content .= $subscribers->handle_actions();


    // Create main part of page content
    $settings = array(
        "site_title" => "Lesson 32",
        "page_title" => "User Authentication", 
        'logo'       => 'Bear.png',
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);
   
?>