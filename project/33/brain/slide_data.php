<?php

    require_once 'views.php';
    require_once 'db.php';
    require_once 'log.php';
    require_once 'auth.php';

    $page = 'slides.php';


    /************************/
    /*      D A T A         */
    /************************/

    // Add a new record
    function add_slide() {
        global $log;
        
        try {
            $title  = filter_input(INPUT_POST, 'title');
            $author  = filter_input(INPUT_POST, 'author');
            $body = filter_input(INPUT_POST, 'body');
            date_default_timezone_set("America/Denver");
            $date  = date('Y-m-d g:i:s a');
            
            $query = "INSERT INTO slides (date, title, author, body) VALUES (:date, :title, :author, :body);";
            
            $log->log("Add Record: $date, $title, $author, $body");
            
            global $db;
            $statement = $db->prepare($query);
        
            $statement->bindValue(':date', $date);
            $statement->bindValue(':title', $title);
            $statement->bindValue(':author', $author);
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
    function delete_slide($id) {
        $action = filter_input(INPUT_GET, 'action');
        $id = filter_input(INPUT_GET, 'id');
        if ($action == 'delete' and !empty($id)) {
            $query = "DELETE from slides WHERE id = :id";
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
    function get_slide($id) {
        $query = "SELECT * FROM slides WHERE id = :id";
        global $db;
        $statement = $db->prepare($query);
        $statement->bindValue(':id', $id);
        $statement->execute();
        $record = $statement->fetch();
        $statement->closeCursor();
        return $record;
    }


    // Query for all slide
    function query_slide () {
        $query = "SELECT * FROM slides";
        global $db;
        $statement = $db->prepare($query);
        $statement->execute();
        return $statement->fetchAll();
    }


    // Update the database
    function update_slide () {
        $id    = filter_input(INPUT_POST, 'id');
        $title = filter_input(INPUT_POST, 'title');
        $author = filter_input(INPUT_POST, 'author');
        $body  = filter_input(INPUT_POST, 'body');
        date_default_timezone_set("America/Denver");
        $date  = date('Y-m-d g:i:s a');
        
        // Modify database row
        $query = "UPDATE slides SET title=:title, body=:body, author=:author, date=:date WHERE id = :id";
        global $db;       
        $statement = $db->prepare($query);

        $statement->bindValue(':id', $id);
        $statement->bindValue(':title', $title);
        $statement->bindValue(':author', $author);
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
    function add_slide_view() {
        require_login('slides.php');
        global $page;
        return '
        <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-pslide">
            <h3>Add slide</h3>
            <form action="' . $page . '" method="post">
                <p><label>Title:</label> &nbsp; <input type="text" name="title"></p>
                <p><label>Author:</label> &nbsp; <input type="text" name="author"></p>
                <p><label>Body:</label> &nbsp; <textarea name="body" rows = "30" cols = "40"></textarea></p>
                <p><input type="submit" value="Add slide"/></p>
                <input type="hidden" name="action" value="create">
            </form>
            </div>
    </div>
    </div>
</div>
        ';
    }


    // Show form for adding a record
    function edit_slide_view($record) {
        $id    = $record['id'];
        $title  = $record['title'];
        $author = $record['author'];
        $body = $record['body'];
        global $page;
        return '
        <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-pslide">
            <h3>Add Presentation</h3>
            <form action="' . $page . '" method="post">
                <p><label>Title:</label> &nbsp; <input type="text" name="title" value="' . $title . '"></p>
                <p><label>Author:</label> &nbsp; <input type="text" name="author" value="' . $author . '"></p>
                <p><label>Body:</label> &nbsp; <textarea name="body" rows = "30" cols = "40">' . $body . '</textarea></p>
                <p><input type="submit" value="Edit slide"/></p>
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
    function render_slide_view() {
        $id = filter_input(INPUT_GET, 'id');
        global $slide;
        global $log;
        global $db;
        
        // POST
        $action = filter_input(INPUT_POST, 'action');
        if ($action == 'create') {    
            $log->log('slide CREATE');                    // CREATE
            add_slide();
        }
        if ($action == 'update') {
            $log->log('slide UPDATE');                    // UPDATE
            update_slide ();
        }

        // GET
        $action = filter_input(INPUT_GET, 'action');
        if (empty($action)) {                               
            $log->log('slide READ');                      // READ
            return slide_list_view(query_slide());
        }
        if ($action == 'add') {
            $log->log('slide Add View');
            return add_slide_view();
        }
        if ($action == 'delete') {
            $log->log('slide DELETE');                    // DELETE
            return delete_slide($id);
        }
        if ($action == 'edit' and ! empty($id)) {
            $log->log('slide Edit View');
            return edit_slide_view(get_slide($id));
        }
    }

    function render_slides($record){
        $body = $record['body'];
        $string = '';
        $string .= '<html>
        <head>
            <link rel="stylesheet" href="https://revealjs.com/css/reveal.css">
            <link rel="stylesheet" href="https://revealjs.com/css/theme/black.css">
            <link rel="stylesheet" href="https://revealjs.com/lib/css/zenburn.css"/>
            <link rel="stylesheet" href="slides.css">
        </head>
        <body>
    
            <div class="reveal">
                <div class="slides">
                    <section data-markdown
                             data-separator="\n---\n" data-separator-vertical="\n--\n">
                        <textarea data-template>'.$body.'</textarea>
                    </section>
                </div>
            </div>
    
            <script src="https://revealjs.com/lib/js/head.min.js"></script>
            <script src="https://revealjs.com/js/reveal.js"></script>
            <script src="slides.js"></script>
    
        </body>
    </html>';
    return $string;
    }


    // render_table -- Create a bullet list in HTML
    function slide_list_view ($list) {
        global $page;
        $string = '';
        $string.= '<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-pslide">
              <h1 class="post-title">
              Presentations
              </h1>
              <p>
                      Please login to Add, Edit, or Delete Slides 
                    </p>
            </div>
          </div>
        </div>
      </div>
            ';
        foreach ($list as $s) {
            $string2 = "";
        if(logged_in())
        {   $string2 .= '
            <a class="btn btn-secondary" href="slides.php?id=' . $s['id'] . '&action=edit">Edit</a>
            <a class="btn btn-secondary" href="slides.php?id=' . $s['id'] . '&action=delete">Delete</a>
            <a class="btn btn-secondary" href="slides.php?action=logout">Logout</a>';
            }
        else {

            $string2 .= '
            <a class="btn btn-secondary" href="review.php?action=login">Login</a>
            <a class="btn btn-secondary" href="slide_view.php?id=' . $s['id'] . '">View Presentation</a>';
            }
            $string .= '<hr> <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-pslide">
                    <h2 class="post-title">
                    Title: 
                    </h2>
                    <p>
                    ' . $s['title'] . '
                    </p>
                    <h3 class="post-subtitle">
                      Author: 
                    </h3>
                    <p>
                    ' . $s['author'] . '
                    </p>
                    <h3 class="post-subtitle">
                      Date: 
                    </h3>
                    <p>
                    ' . $s['date'] . '
                    </p>
                    <h3 class="post-subtitle">
                      Body: 
                    </h3>
                    <pre>
                    ' . $s['body'] . '
                    </pre>
                </div>
                <div class="clearfix">
            '.$string2.'
          </div>
              </div>
            </div>
          </div>';
        }

        return $string;
    }


?>
