<?php

    require_once 'views.php';
    require_once 'db.php';    
    require_once 'log.php';
    require_once 'files.php';
    require_once 'Parsedown.php';
    

    // Markdown Text
    $markdown = read_file('brain.md');


    // Convert the Markdown into HTML
    $Parsedown = new Parsedown();
    $content = '<hr> <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="/../index.html">
            <h2 class="post-title">
              Site Home
            </h2>
            <h3 class="post-subtitle">
              Link to site home
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
    </div>';
    

    // Create main part of page content
    $settings = array(
        "site_title" => "A Smarter Tool",
        "page_title" => "Exterior Brain", 
        "content"    => $content);

    echo render_page($settings);

?>
