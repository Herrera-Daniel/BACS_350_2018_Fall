<?php

    require_once 'views.php'; 
    require_once 'log.php';
    require_once 'files.php';
    require_once 'review_data.php';
    
    
    // Page content

    $content = render_review_view();
    $content .=  '<hr> <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <a href="index.php">
            <h2 class="post-title">
              Home
            </h2>
            <h3 class="post-subtitle">
              Link to Brain Home
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
            <a href="review.php?action=add">
              <h2 class="post-title">
                Add review
              </h2>
              <h3 class="post-subtitle">
                Link to the add review
              </h3>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>';

    
    // Create main part of page content
    $settings = array(
        "site_title" => "Exterior Brain",
        "page_title" => "Design Reviews App", 
        "content"    => $content);

    echo render_page($settings);

    

?>
