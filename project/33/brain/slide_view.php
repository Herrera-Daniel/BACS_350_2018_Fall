<?php
require_once 'views.php';
require_once 'db.php';    
require_once 'log.php';
require_once 'files.php';
require_once 'slide_data.php';
$id = filter_input(INPUT_GET, 'id');
$content = render_slides(get_slide($id));

$settings = array(
    "site_title" => "Exterior Brain",
    "content"    => $content);

echo render_page_slides($settings);
?>