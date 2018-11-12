<?php

    require_once 'views.php'; 
    require_once 'log.php';
    require_once 'files.php';
    require_once 'notes_data.php';
    
    
    // Page content

    $notes =  render_notes_view();

    $content = '<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="index.php">
            <h2 class="post-title">
              BACS 350 Project Links
            </h2>
            <h3 class="post-subtitle">
              Brain
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
        "site_title" => "Exterior Brain",
        "page_title" => "Notes App", 
        "content"    => $content);

    echo render_page($settings);

?>
