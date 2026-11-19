<?php
/**
 * Title: Simple call to action
 * Slug: mt-senda/simple-cta
 * Categories: call-to-action, text
 * Description: A minimal call to action with a heading, text, and link.
 *
 * @package MTSenda
 */
?>

<!-- wp:group {"backgroundColor":"surface","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|40","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

    <!-- wp:heading {"textAlign":"center","level":2} -->
    <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Stay curious.', 'mt-senda' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><?php esc_html_e( 'There is always something new to discover. Take a moment to explore.', 'mt-senda' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Discover more', 'mt-senda' ); ?></a></p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
