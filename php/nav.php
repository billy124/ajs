<ul>
    <?php
    $files = scandir('.', 0);
    foreach ($files as $file) {
        if (end(explode('.', $file)) == 'php' && is_file($file)) {
            $title =  explode('.', ucwords(str_replace('-', ' ', $file)))[0]; 
            ?>
            <li><a href="<?php echo $file; ?>"><?php echo $title; ?></a></li>
            <?php
        }
    }
    ?>
</ul>