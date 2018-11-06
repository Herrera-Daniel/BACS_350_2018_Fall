<?php

    // Create a database connection
    require_once 'db.php';
    require_once 'log.php';

    $page = 'album_list.php';


    // Add a new record
    function add_album($db) {
        try {
            $name  = filter_input(INPUT_POST, 'name');
            $email = filter_input(INPUT_POST, 'email');
            $query = "INSERT INTO album (artist, name, artwork, purchase, description, review) VALUES (:artist, :name, :artwork, :purchase, :description, :review);";
            $statement = $db->prepare($query);
            $statement->bindValue(':artist', $artist);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':artwork', $artwork);
            $statement->bindValue(':purchase', $purchase);
            $statement->bindValue(':description', $description);
            $statement->bindValue(':review', $review);
            $statement->execute();
            $statement->closeCursor();
            global $page;
            header("Location: $page");
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }

    // Show form for adding a record
    function add_album_view() {
        global $page;
        return '
            <div class="card">
                <h3>Add album</h3>
                <form action="' . $page . '" method="post">
                <p><label>Artist:</label> &nbsp; </p>
                <p><textarea name="artist" id="textbox" rows = "1" cols = "40"></textarea></p>
                <p><label>Album Name:</label> &nbsp;</p>
                <p><textarea name="name" id="textbox" rows = "1" cols = "40"></textarea></p>
                <p><label>Artwork Link:</label> &nbsp;
                <p><textarea name="artwork" id="textbox" rows = "1" cols = "40"></textarea></p>
                <p><label>Purchase Link:</label> &nbsp;
                <p><textarea name="purchase" id="textbox" rows = "1" cols = "40"></textarea></p>
                <p><label>Description:</label> &nbsp;
                <p><textarea name="description" id="textbox" rows = "2" cols = "40"></textarea></p>
                <p><label>Review:</label> &nbsp; </p>
                <p><textarea name="review" id="textbox" rows = "10" cols = "40" name="review" id="textbox"></textarea></p>
                <p><input type="submit" value="Enter Album"/></p>
                </form>
            </div>
        ';
    }


    // Delete Database Record
    function delete_album($db, $id) {
        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if ($action == 'delete' and !empty($id)) {
            $query = "DELETE from album WHERE id = :id";
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();
        }
        global $page;
        header("Location: $page");
    }
    

    // Show form for adding a record
    function edit_album_view($record) {
        $id    = $record['id'];
        $name  = $record['name'];
        $email = $record['email'];
        global $page;
        return '
            <div class="card">
                <h3>Edit album</h3>
                <form action="' . $page . '" method="post">
                <p><label>Artist:</label> &nbsp; </p>
                <p><textarea name="artist" id="textbox" rows = "1" cols = "40"></textarea></p>
                <p><label>Album Name:</label> &nbsp;</p>
                <p><textarea name="name" id="textbox" rows = "1" cols = "40"></textarea></p>
                <p><label>Artwork Link:</label> &nbsp;
                <p><textarea name="artwork" id="textbox" rows = "1" cols = "40"></textarea></p>
                <p><label>Purchase Link:</label> &nbsp;
                <p><textarea name="purchase" id="textbox" rows = "1" cols = "40"></textarea></p>
                <p><label>Description:</label> &nbsp;
                <p><textarea name="description" id="textbox" rows = "2" cols = "40"></textarea></p>
                <p><label>Review:</label> &nbsp; </p>
                <p><textarea name="review" id="textbox" rows = "10" cols = "40" name="review" id="textbox"></textarea></p>
                <p><input type="submit" value="Enter Album"/></p>
                </form>
            </div>
        ';
    }


    // Lookup Record using ID
    function get_album($db, $id) {
        $query = "SELECT * FROM album WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $record = $statement->fetch();
        $statement->closeCursor();
        return $record;
    }


    // Handle all action verbs
    function handle_actions() {
        $id = filter_input(INPUT_GET, 'id');
        global $album;
        global $log;

        // POST
        $action = filter_input(INPUT_POST, 'action');
        if ($action == 'create') {    
            $log->log('album CREATE');                    // CREATE
            $album->add();
        }
        if ($action == 'update') {
            $log->log('album UPDATE');                    // UPDATE
            $album->update();
        }

        // GET
        $action = filter_input(INPUT_GET, 'action');
        if (empty($action)) {                                  
            $log->log('album READ');                      // READ
            return $album->list_view();
        }
       if ($action == 'add') {
            $log->log('album Add View');
            return $album->add_view();
        }
        if ($action == 'clear') {
            $log->log('album DELETE ALL');
            return $album->clear();
        }
        if ($action == 'delete') {
            $log->log('album DELETE');                    // DELETE
            return $album->delete($id);
        }
        if ($action == 'edit' and ! empty($id)) {
            $log->log('album Edit View');
            return $album->edit_view($id);
        }
    }
       

    // Query for all album
    function query_album ($db) {
        $query = "SELECT * FROM album";
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // render_table -- Create a bullet list in HTML
    function album_list_view ($table) {
        global $page;
        $s = render_button('Add album', "$page?action=add") . '<br><br>';
        $s .= '<table>';
        $s .= '<tr><th>Name</th><th>Email</th></tr>';
        foreach($table as $row) {
            $edit = render_link($row[1], "$page?id=$row[0]&action=edit");
            $email = $row[2];
            $delete = render_link("delete", "$page?id=$row[0]&action=delete");
            $row = array($edit, $email, $delete);
            $s .= '<tr><td>' . implode('</td><td>', $row) . '</td></tr>';
        }
        $s .= '</table>';
        
        return $s;
    }


    // Update the database
    function update_album ($db) {
        $id    = filter_input(INPUT_POST, 'id');
        $name  = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        
        // Modify database row
        $query = "UPDATE album SET name = :name, email = :email WHERE id = :id";
        $statement = $db->prepare($query);

        $statement->bindValue(':id', $id);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':email', $email);

        $statement->execute();
        $statement->closeCursor();
        
        global $page;
        header("Location: $page");
    }
 

    /* -------------------------------------------------------------
    
                        S U B S C R I B E R S
    
     ------------------------------------------------------------- */

    // My album list
    class Album {

        // Database connection
        private $db;

        
        // Automatically connect
        function __construct() {
            global $db;
            $this->db =  $db;
        }

        
        // CRUD
        
        function add() {
            return add_album ($this->db);
        }
        
        function query() {
            return query_album($this->db);
        }
        
    
        function clear() {
            return clear_album($this->db);
        }
        
        function delete() {
            delete_album($this->db, $id);
        }
        
        function get($id) {
            return get_album($this->db, $id);
        }
        
        function update() {
            update_album($this->db);
        }
        
        
        // Views
        
        function handle_actions() {
            return handle_actions();
        }
        
        function add_view() {
            return add_album_view();
        }
        
        function edit_view($id) {
            return edit_album_view($this->get($id));
        }
        
        function list_view() {
            return album_list_view($this->query());
        }
        
    }


    // Create a list object and connect to the database
    $album = new Album;

?>
