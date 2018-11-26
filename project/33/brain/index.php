<?php

    require_once 'views.php';
    require_once 'db.php';    
    require_once 'log.php';
    require_once 'files.php';
    require_once 'Parsedown.php';
    require_once 'auth.php';
    

    // Markdown Text
    $markdown = read_file('brain.md');


    // Convert the Markdown into HTML
    $Parsedown = new Parsedown();
    $content = '<hr> <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="/project/index.php">
            <h2 class="post-title">
              BACS 350 Project Links
            </h2>
            <h3 class="post-subtitle">
              Link to my BACS 350 Projects
            </h3>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="notes.php">
              <h2 class="post-title">
                Notes App
              </h2>
              <h3 class="post-subtitle">
                Link to the Notes app
              </h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="review.php">
              <h2 class="post-title">
                Design Reviews
              </h2>
              <h3 class="post-subtitle">
                Link to the Design Reviews app
              </h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-preview">
            <a href="slides.php">
              <h2 class="post-title">
                Slides
              </h2>
              <h3 class="post-subtitle">
                Link to the Slides app
              </h3>
            </a>
          </div>
        </div>
      </div>
    </div>';
    

    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "A Smarter Tool", 
        "content"    => $content);

    echo render_page($settings);

?>
