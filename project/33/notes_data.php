<?php

    require_once 'views.php';
    require_once 'db.php';
    require_once 'log.php';

    $page = 'notes.php';


    /************************/
    /*      D A T A         */
    /************************/

    // Add a new record
    function add_note() {
        global $log;
        
        try {
            $title = filter_input(INPUT_POST, 'title');
            $body  = filter_input(INPUT_POST, 'body');
            date_default_timezone_set("America/Denver");
            $date  = date('Y-m-d g:i:s a');
            
            $query = "INSERT INTO notes (title, date, body) VALUES (:title, :date, :body);";
            
            $log->log("Add Record: $date, $title, $body");
            
            global $db;
            $statement = $db->prepare($query);
            
            $statement->bindValue(':title', $title);
            $statement->bindValue(':date', $date);
            $statement->bindValue(':body', $body);
            
            $statement->execute();
            $statement->closeCursor();
            
            global $page;
            header("Location: $page");
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            $log->log("**Error**: $error_message **");
            die();
        }
    }


    // Delete Database Record
    function delete_note($id) {
        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if ($action == 'delete' and !empty($id)) {
            $query = "DELETE from notes WHERE id = :id";
            global $db;
            $statement = $db->prepare($query);
            $statement->bindValue(':id', $id);
            $statement->execute();
            $statement->closeCursor();
        }
        global $page;
        header("Location: $page");
    }
    

    // Lookup Record using ID
    function get_note($id) {
        $query = "SELECT * FROM notes WHERE id = :id";
        global $db;
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $record = $statement->fetch();
        $statement->closeCursor();
        return $record;
    }


    // Query for all notes
    function query_notes () {
        $query = "SELECT * FROM notes";
        global $db;
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // Update the database
    function update_note () {
        $id    = filter_input(INPUT_POST, 'id');
        $title = filter_input(INPUT_POST, 'title');
        $body  = filter_input(INPUT_POST, 'body');
        date_default_timezone_set("America/Denver");
        $date  = date('Y-m-d g:i:s a');
        
        // Modify database row
        $query = "UPDATE notes SET title=:title, body=:body, date=:date WHERE id = :id";
        global $db;       
        $statement = $db->prepare($query);

        $statement->bindValue(':id', $id);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':body', $body);
        $statement->bindValue(':date', $date);

        $statement->execute();
        $statement->closeCursor();
        
        global $page;
        header("Location: $page");
    }


    /************************/
    /*      V I E W S       */
    /************************/

    // Show form for adding a record
    function add_note_view() {
        global $page;
        return '
        <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h3>Add note</h3>
            <form action="' . $page . '" method="post">
                <p><label>Title:</label> &nbsp; <input type="text" name="title"></p>
                <p><label>Body:</label> &nbsp; <textarea name="body"></textarea></p>
                <p><input type="submit" value="Add Note"/></p>
                <input type="hidden" name="action" value="create">
            </form>
            </div>
    </div>
    </div>
</div>
        ';
    }


    // Show form for adding a record
    function edit_note_view($record) {
        $id    = $record['id'];
        $title  = $record['title'];
        $body = $record['body'];
        global $page;
        return '
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h3>Edit note</h3>
            <form action="' . $page . '" method="post">
                <p><label>Title:</label> &nbsp; <input type="text" name="title" value="' . $title . '"></p>
                <p><label>Body:</label> &nbsp; <textarea name="body">' . $body . '</textarea></p>
                <p><input type="submit" value="Save Record"/></p>
                <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="' . $id . '">
            </form>
        </div>
    </div>
    </div>
</div>
        ';
    }


    // Handle all action verbs
    function render_notes_view() {
        $id = filter_input(INPUT_GET, 'id');
        global $notes;
        global $log;
        global $db;
        
        // POST
        $action = filter_input(INPUT_POST, 'action');
        if ($action == 'create') {    
            $log->log('note CREATE');                    // CREATE
            add_note();
        }
        if ($action == 'update') {
            $log->log('note UPDATE');                    // UPDATE
            update_note ();
        }

        // GET
        $action = filter_input(INPUT_GET, 'action');
        if (empty($action)) {                                  
            $log->log('note READ');                      // READ
            return note_list_view(query_notes());
        }
        if ($action == 'add') {
            $log->log('note Add View');
            return add_note_view();
        }
        if ($action == 'delete') {
            $log->log('note DELETE');                    // DELETE
            return delete_note($id);
        }
        if ($action == 'edit' and ! empty($id)) {
            $log->log('note Edit View');
            return edit_note_view(get_note($id));
        }
    }


    // render_table -- Create a bullet list in HTML
    function note_list_view ($list) {
        global $page;
        $string = '';
        $string.= '<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
              <h1 class="post-title">
              Notes
              </h1>
            </div>
          </div>
        </div>
      </div>
      <hr>
            ';
        foreach ($list as $s) {
            $string .= '<div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-preview">
                    <h2 class="post-title">
                    Title: 
                    </h2>
                    <p>
                    ' . $s['title'] . '
                    </p>
                    <h3 class="post-subtitle">
                      Body:
                    </h3>
                    <p>
                    ' . $s['body'] . '
                    </p>
                  </a>
                </div>
                <div class="clearfix">
<<<<<<< HEAD
            <a class="btn btn-secondary" href="notes.php?id=1&action=edit">Edit</a>
            <a class="btn btn-secondary" href="notes.php?id=1&action=delete">Delete</a>
=======
            <a class="btn btn-secondary" href="notes.php?id=' . $s['id'] . ' &action=edit">Edit</a>
            <a class="btn btn-secondary" href="notes.php?id=' . $s['id'] . '&action=delete">Delete</a>
>>>>>>> bcc6891f1c8e595b26aa5eabcf6eb2fcff55edbb
          </div>
              </div>
            </div>
          </div>';
        }

        return $string;
    }


?>
