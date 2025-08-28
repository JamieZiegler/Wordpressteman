<?php

add_filter( 'autoptimize_html_after_minify', function( $html ) {
    $html = str_replace('/>', '>', $html);
    return $html;
}
);

function get_custom_meta_title() {
    $meta_title = get_the_title();
    $site_name = 'James Ziegler'; 
    if (is_home() && !is_front_page()) {
        $meta_title = 'Artiklar';
    }
    if ($site_name && $meta_title) {
        $meta_title .= ' - ' . $site_name;
    }
    return $meta_title;
}

function get_custom_meta_description() {
    $meta_description = ''; 
    if (is_home() && !is_front_page()) {
        $meta_description = 'Här kan du läsa en samling artiklar som jag skrivit på ämnen rörande internet, webbutveckling, skapande och mer.';
    } elseif (is_page('Hem')) {
        $meta_description = 'Välkommen till min webbplats! Detta är startsidan, härifrån kan du navigera runt till resterande innehåll.';
    } elseif (is_singular('Post')) {
        $meta_description = 'Detta är en av mina artiklar från artikelsidan.';
    } elseif (is_page('Presentation')) {
        $meta_description = 'Här kan du läsa mer om mig och mitt webb-intresse.';
    } elseif (is_page('CV')) {
        $meta_description = 'Utforska min professionella erfarenhet, övriga meriter, och utbildning.';
    } elseif (is_page('Galleri')) {
        $meta_description = 'Välj bland ett av mina gallerier för att se mer av vad jag har skapat.';
    } elseif (is_page('Digitalt skapande 1')) {
        $meta_description = 'Här kan du se mina skapelser från kursen Digitalt Skapande 1.';
    } elseif (is_page('Digitalt skapande 2')) {
        $meta_description = 'Här kan du se mina skapelser från kursen Digitalt Skapande 2.';
    } elseif (is_page('Tidigare projekt')) {
        $meta_description = 'Under den här sidan samlar jag mina större projekt. Än så länge kan du klicka dig vidare till mitt projekt i Webbutveckling 1.';
    } elseif (is_page('Webbutveckling 1')) {
        $meta_description = 'Här kan du se en GIF av mitt tidigare webbplatsprojekt, samt klicka dig vidare till min dokumentation av projektet.';
    } elseif (is_page('Kontakt')) {
        $meta_description = 'På den här sidan kan du hitta mina kontaktuppgifter, och även kontakta mig via ett formulär.';
    } elseif (is_page('Tack')) {
        $meta_description = 'Denna sida landar du på om du har skickat in mitt formulär.';
    }
    return $meta_description;
}


function enqueue_schema_script() {
    wp_enqueue_script('schema', get_template_directory_uri() . '/schema.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_schema_script');

?>