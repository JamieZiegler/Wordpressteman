<!-- Uppdrag 4, Webbutveckling 1. September 2023. -->
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/print.css" rel="stylesheet" type="text/css" media="print">
    <title>
        James webbsida
    </title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <header>
            <div>
                <a href="http://localhost/wordpress/"><img src="http://localhost/wordpress/wp-content/uploads/2023/09/headerlogga5-2.png" height="200"
                alt="Företagslogotyp 'Ziegler' handskrivet och 'media', skrivet med en pixlig font, på suddig lila bakgrund som matchar resten av sidans färgtema"></a>
            </div>
        </header>
        <nav>
        <ul>
            <li class="page_item"><a href="<?php echo home_url(); ?>">Hem</a></li>
            <?php wp_list_pages('&title_li='); ?>
        </ul>
        </nav>