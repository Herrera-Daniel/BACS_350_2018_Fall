<?php

    function get_file_list($path) {
        $files = array();
        if (!is_dir($path)) { return $files; }

        $items = scandir($path);
        foreach ($items as $item) {
             $item_path = $path . DIRECTORY_SEPARATOR . $item;
             if (is_file($item_path)) {
                 $files[] = $item;
             }
        }
        return $files;
    }
    
    $path = '.';
    $files = get_file_list($path);
?>

<h2>Directory Listing</h2>

<?php if (count($files) == 0) : ?>
    <p>No images uploaded.</p>
<?php else: ?>
    <ul>
        <?php foreach($files as $filename) :
            $file_url = $path . '/' .  urlencode($filename);
        ?>
        <li>
            <a href="<?php echo $file_url; ?>"><?php echo $filename; ?></a>
        </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>