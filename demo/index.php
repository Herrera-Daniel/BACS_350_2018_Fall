 

<?php
    
    require 'db.php';
    require 'views.php';

    render_page('Subscriber List', 
        'Current Subscribers');
    
    $db = local_connect();
    render_list(query_subscribers());
?>