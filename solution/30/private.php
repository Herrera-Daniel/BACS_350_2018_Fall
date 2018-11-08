<?php
    
    require_once 'log.php';
    require_once 'views.php';
    require_once 'auth.php';


    // Log the page load
    $log->log_page();

    // Display the page content
    $content = render_button('Templates', '../../templates');
    $content .= render_button('Solutions', '..');
    $content .= render_button('Show Log', 'pagelog.php');
    

    // Check on login
    $login = handle_auth_actions();
    if (empty($login)) {
        require_login('private.php');
        
        $content .= render_button('Logout', 'private.php?action=logout');
        
        $content .= '
        <h2>Private Page</h2>
        <p>
            This solution demonstrates the use of authentication code.
            Visiting this page requires a login.

            <a href="index.php">Public Page</a>
        </p>
        ';
    }
    else {
        $content .= render_button('Login', 'private.php?action=login');
        $content .= render_button('Sign Up', 'private.php?action=signup');
        $content .= $login;
    }
    

    // Create main part of page content
    $settings = array(
        "site_title" => "System Admins",
        "page_title" => "User Authentication", 
        "logo"       => "Bear.png",
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);
?>
