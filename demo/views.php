 <?php
    
    function render_page($title, $text) {
        
        echo "<h1>$title</h1><p>$text</p>";
    }

    // Loop over all of the subscribers to make a bullet list
    function render_list($list) {

        echo '<h2>Subscribers in List</h2>';
        echo '<ul>';
        foreach ($list as $s) {
            echo '<li>' . $s['id'] . ', ' . $s['name'] . ', ' . $s['email'] . '</li>';
        }
        echo '</ul>';
    
    }
    
?>