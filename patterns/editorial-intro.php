<?php
/**
 * Title: Editorial introduction
 * Slug: mt-senda/editorial-intro
 * Categories: featured, text
 * Description: A minimal editorial introduction with a prominent heading.
 *
 * @package MTSenda
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

    <!-- wp:paragraph {"textColor":"accent","fontSize":"small"} -->
    <p class="has-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'A SPACE FOR IDEAS', 'mt-senda' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(3rem, 7vw, 5.5rem)","lineHeight":"1.08","letterSpacing":"-0.035em"}}} -->
    <h1 class="wp-block-heading" style="font-size:clamp(3rem, 7vw, 5.5rem);line-height:1.08;letter-spacing:-0.035em"><?php esc_html_e( 'A quieter way.', 'mt-senda' ); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"fontSize":"large"} -->
    <p class="has-large-font-size"><?php esc_html_e( 'Thoughtful stories, simple perspectives, and room for what matters.', 'mt-senda' ); ?></p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
