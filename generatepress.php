<?php
/**
 * PHP Snippet to see your child theme CSS in the block editor:
 */

 add_filter( 'generate_editor_styles', function( $editor_styles ) {
    $editor_styles[] = 'style.css';
    return $editor_styles;
} );