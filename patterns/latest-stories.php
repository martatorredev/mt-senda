<?php
/**
 * Title: Latest stories
 * Slug: mt-senda/latest-stories
 * Categories: featured, posts
 * Description: A minimal list of the latest three posts.
 *
 * @package MTSenda
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)">

    <!-- wp:heading {"level":2} -->
    <h2 class="wp-block-heading"><?php esc_html_e( 'Latest stories', 'mt-senda' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:query {"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":false,"sticky":"exclude"},"layout":{"type":"default"}} -->
    <div class="wp-block-query">

        <!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:post-title {"isLink":true,"level":3} /-->
                <!-- wp:post-date {"fontSize":"small"} /-->
            </div>
            <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-no-results -->
            <!-- wp:paragraph -->
            <p><?php esc_html_e( 'New stories will appear here.', 'mt-senda' ); ?></p>
            <!-- /wp:paragraph -->
        <!-- /wp:query-no-results -->

    </div>
    <!-- /wp:query -->

</div>
<!-- /wp:group -->
