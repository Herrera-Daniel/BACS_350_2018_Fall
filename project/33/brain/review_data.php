<?php

    require_once 'views.php';
    require_once 'db.php';
    require_once 'log.php';
    require_once 'auth.php';

    $page = 'review.php';


    /************************/
    /*      D A T A         */
    /************************/

    // Add a new record
    function add_review() {
        global $log;
        
        try {
            $review_email  = filter_input(INPUT_POST, 'review_email');
            $design_email  = filter_input(INPUT_POST, 'design_email');
            $url  = filter_input(INPUT_POST, 'url');
            $scorecard  = filter_input(INPUT_POST, 'scorecard');
            $score  = filter_input(INPUT_POST, 'score');
            date_default_timezone_set("America/Denver");
            $date  = date('Y-m-d g:i:s a');
            
            $query = "INSERT INTO review (date, review_email, design_email, url, scorecard, score) VALUES (:date, :review_email, :design_email, :url, :scorecard, :score);";
            
            $log->log("Add Record: $date, $review_email, $design_email, $url, $scorecard, $score");
            
            global $db;
            $statement = $db->prepare($query);
        
            $statement->bindValue(':date', $date);
            $statement->bindValue(':review_email', $review_email);
            $statement->bindValue(':design_email', $design_email);
            $statement->bindValue(':url', $url);
            $statement->bindValue(':scorecard', $scorecard);
            $statement->bindValue(':score', $score);
            
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
    function delete_review($id) {
        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if ($action == 'delete' and !empty($id)) {
            $query = "DELETE from review WHERE id = :id";
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
    function get_review($id) {
        $query = "SELECT * FROM review WHERE id = :id";
        global $db;
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $record = $statement->fetch();
        $statement->closeCursor();
        return $record;
    }


    // Query for all review
    function query_review () {
        $query = "SELECT * FROM review";
        global $db;
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // Update the database
    function update_review () {
        $id    = filter_input(INPUT_POST, 'id');
        $title = filter_input(INPUT_POST, 'title');
        $body  = filter_input(INPUT_POST, 'body');
        date_default_timezone_set("America/Denver");
        $date  = date('Y-m-d g:i:s a');
        
        // Modify database row
        $query = "UPDATE review SET title=:title, body=:body, date=:date WHERE id = :id";
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
    function add_review_view() {
        global $page;
        $login = handle_auth_actions();
    if (empty($login)) {
      return require_login('notes.php');
    }
    else{
        return '
        <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h3>Add Review</h3>
            <form action="' . $page . '" method="post">
                <p><label>Reviewers Email:</label> &nbsp; <input type="text" name="review_email"></p>
                <p><label>Designers Email:</label> &nbsp; <input type="text" name="design_email"></p>
                <p><label>Absolute Url:</label> &nbsp; <input type="text" name="url"></p>
                <p><label>Scorecard:</label> &nbsp; <textarea name="scorecard" rows = "10" cols = "40"></textarea></p>
                <p><label>Score:</label> &nbsp; <input type="text" name="score"></p>
                <p><input type="submit" value="Add Review"/></p>
                <input type="hidden" name="action" value="create">
            </form>
            </div>
    </div>
    </div>
</div>
        ';}
    }


    // Show form for adding a record
    function edit_review_view($record) {
        $id    = $record['id'];
        $review  = $record['review_email'];
        $design = $record['design_email'];
        $url = $record['url'];
        $scorecard = $record['scorecard'];
        $score = $record['score'];
        global $page;
        return '
        <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
            <h3>Add Review</h3>
            <form action="' . $page . '" method="post">
                <p><label>Reviewers Email:</label> &nbsp; <input type="text" name="review_email" value="' . $review . '"></p>
                <p><label>Designers Email:</label> &nbsp; <input type="text" name="design_email" value="' . $design . '"></p>
                <p><label>Absolute Url:</label> &nbsp; <input type="text" name="url" value="' . $url . '"></p>
                <p><label>Scorecard:</label> &nbsp; <textarea name="scorecard" rows = "10" cols = "40">' . $scorecard . '</textarea></p>
                <p><label>Score:</label> &nbsp; <input type="text" name="score" value="' . $score . '"></p>
                <p><input type="submit" value="Edit Review"/></p>
                <input type="hidden" name="action" value="update">
            </form>
            </div>
    </div>
    </div>
</div>
        ';
    }


    // Handle all action verbs
    function render_review_view() {
        $id = filter_input(INPUT_GET, 'id');
        global $review;
        global $log;
        global $db;
        
        // POST
        $action = filter_input(INPUT_POST, 'action');
        if ($action == 'create') {    
            $log->log('review CREATE');                    // CREATE
            add_review();
        }
        if ($action == 'update') {
            $log->log('review UPDATE');                    // UPDATE
            update_review ();
        }

        // GET
        $action = filter_input(INPUT_GET, 'action');
        if (empty($action)) {                                  
            $log->log('review READ');                      // READ
            return review_list_view(query_review());
        }
        if ($action == 'add') {
            $log->log('review Add View');
            return add_review_view();
        }
        if ($action == 'delete') {
            $log->log('review DELETE');                    // DELETE
            return delete_review($id);
        }
        if ($action == 'edit' and ! empty($id)) {
            $log->log('review Edit View');
            return edit_review_view(get_review($id));
        }
    }


    // render_table -- Create a bullet list in HTML
    function review_list_view ($list) {
        global $page;
        $string = '';
        $string.= '<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-preview">
              <h1 class="post-title">
              Reviews
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
                    Date: 
                    </h2>
                    <p>
                    ' . $s['date'] . '
                    </p>
                    <h3 class="post-subtitle">
                      Reviewers Email: 
                    </h3>
                    <p>
                    ' . $s['review_email'] . '
                    </p>
                    <h3 class="post-subtitle">
                      Designers Email: 
                    </h3>
                    <p>
                    ' . $s['design_email'] . '
                    </p>
                    <h3 class="post-subtitle">
                      Absolute Url: 
                    </h3>
                    <p>
                    <a href=' . $s['url'] . '>Link To Site</a>
                    </p>
                    <h3 class="post-subtitle">
                      Scorecard: 
                    </h3>
                    <pre>
                    ' . $s['scorecard'] . '
                    </pre>
                    <h3 class="post-subtitle">
                      Score: 
                    </h3>
                    <p>
                    ' . $s['score'] . '
                    </p>
                  </a>
                </div>
                <div class="clearfix">
            <a class="btn btn-secondary" href="review.php?id=' . $s['id'] . '&action=edit">Edit</a>
            <a class="btn btn-secondary" href="review.php?id=' . $s['id'] . '&action=delete">Delete</a>
          </div>
              </div>
            </div>
          </div>';
        }

        return $string;
    }


?>
