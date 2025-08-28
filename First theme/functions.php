<?php

add_filter( 'autoptimize_html_after_minify', function( $html ) {
    $html = str_replace('/>', '>', $html);
    return $html;
}
);
