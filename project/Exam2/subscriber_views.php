<?php

    /*
        add_subscriber_form -- Create an HTML form to add record.
    */

    function add_subscriber_form() {
        
        echo '
            <div class="card">
                <h3>Add Album</h3>
            
            <form action="insert.php" method="post">
                <p><label>Artist:</label> &nbsp; <input type="text" name="artist"></p>
                <p><label>Album Name:</label> &nbsp; <input type="text" name="name"></p>
                <p><label>Artwork Link:</label> &nbsp; <input type="text" name="artwork"></p>
                <p><label>Purchase Link:</label> &nbsp; <input type="text" name="purchase"></p>
                <p><label>Description:</label> &nbsp; <input type="text" name="description"></p>
                <p><label>Review:</label> &nbsp; <input type="text" name="review"></p>
                <p><input type="submit" value="Enter Album"/></p>
                </form>
            </div>
            ';
        
    }


    
    /*
        render_list -- Loop over all of the subscribers to make a bullet list
    */
 
    function render_list($list) {

        echo '
            <div class="card">
                <h3>Albums in List</h3> 
                <ul>
            ';
        foreach ($list as $s) {
            echo '<li>' . $s['artist'] . ', ' . $s['name'] . ', ' . $s['artwork'] . ', ' . $s['purchase'] . ', ' . $s['description'] . ', ' . $s['review'] . '</li>';
        }
        echo '
                </ul>
            </div>';
    
    }
    

?>