<!-- Webbutveckling 2. December 2023. -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/print.css" rel="stylesheet" type="text/css" media="print">
    <?php
    $meta_title = get_custom_meta_title();
    echo '<title>' . esc_html($meta_title) . '</title>';
    ?>
    <meta name="description" content="<?php echo get_custom_meta_description(); ?>">
    <?php wp_enqueue_script('schema'); ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <header role="banner">
            <div>
                <div id="headerImage1"><a href="http://localhost/wordpress/"><img src="http://localhost/wordpress/wp-content/uploads/2023/12/Logotyp.svg" height="200" alt="Fullstor logotyp"></a></div>
                <div id="headerImage2"><a href="http://localhost/wordpress/"><img src="http://localhost/wordpress/wp-content/uploads/2023/12/Logotyp.svg" height="100" alt="Mellanstor logotyp"></a></div>
                <div id="headerImage3"><a href="http://localhost/wordpress/"><img src="http://localhost/wordpress/wp-content/uploads/2023/12/Ikon.svg" height="30" alt="Liten ikon"></a></div>
            </div>
        </header>
            <nav role="navigation">
                <div class="menyikon">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <ul>
                    <?php
                    $args = array(
                        'title_li' => '', 
                        'exclude'  => '48',
                    );
                    wp_list_pages($args);
                    ?>
                </ul>

            </nav>


