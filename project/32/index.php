<?php
<<<<<<< HEAD

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
=======
    
    require_once 'log.php';
    require_once 'views.php';
    require_once 'auth.php';
>>>>>>> ec36bab4dd9144d04b02b934363ec127aa69e8e8


    // Log the page load
    $log->log_page();
<<<<<<< HEAD
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
=======


    // Display the page content
    $content = render_button('Home', 'index.php');
    $content .= render_button('Show Log', 'pagelog.php');
    $content .= user_info();


    $content .= '
    <h2>Public Page</h2>
    <p>
        This solution demonstrates the use of authentication code.
        Visiting this page does not require a login.

        <a href="private.php">Private Page</a>
    </p>
    ';
    

    // Create main part of page content
    $settings = array(
        "site_title" => "System Admins",
        "page_title" => "User Authentication", 
        "logo"       => "Bear.png",
>>>>>>> ec36bab4dd9144d04b02b934363ec127aa69e8e8
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);
<<<<<<< HEAD
   
?>
=======

?>
>>>>>>> ec36bab4dd9144d04b02b934363ec127aa69e8e8
