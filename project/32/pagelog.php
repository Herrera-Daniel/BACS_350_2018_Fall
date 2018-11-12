<?php

    require_once 'views.php';
 
    // Handle any page actions required
    require_once 'log.php';
<<<<<<< HEAD

    // Show buttons to go to other pages
    $content = render_button('Home', 'index.php');
    $content .= render_button('Solutions', '../solution');
    $content .= render_button('Show Log', 'pagelog.php');

=======
>>>>>>> ec36bab4dd9144d04b02b934363ec127aa69e8e8
    $log->handle_actions();
    $log->log_page();


    // Show page history
<<<<<<< HEAD
    $content .=  $log->show_log();
  

    // Add form
    $content .=  $log->show_add('pagelog.php');
=======
    $history = $log->show_log();
  

    // Add form
    $add = $log->show_add('pagelog.php');
    $content =  $history . $add;
>>>>>>> ec36bab4dd9144d04b02b934363ec127aa69e8e8


    // Show Page
    $settings = array(
        "site_title" => "BACS 350 Templates",
        "page_title" => "Display Pages loaded", 
<<<<<<< HEAD
        'logo'       => 'Bear.png',
=======
>>>>>>> ec36bab4dd9144d04b02b934363ec127aa69e8e8
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);

?>
