<?php

    // Start the page
    require_once 'views.php';
 
    $site_title = 'BACS 350 - Lesson 23';
    $page_title = 'Templates';
    begin_page($site_title, $page_title);


  


    // -------------------------
    // Example 8

        function render_template($template, $settings) {
            $text = file_get_contents($template); 
            $text = transform_text($text, $settings);
            return $text;
        }


        $settings = article_settings("Declaration of Independence",  "We hold these truths to be self-evident",  "Tom Jefferson");
        
        render_template("article.html", $settings)    
            ;
    render_template("article.html", 
        article_settings("Declaration of Independence", "We hold these truths to be self-evident", "Tom Jefferson"));


    echo '<h1>HTML File <a href="article.html">Article.html</a>';


//    // -------------------------
//    // Example 8
//
//    $function = '';
//    $code = '"TO DO";';
//
//
//    echo demo('Example 8 - Render Template', $function, $code);



    end_page();
?>
