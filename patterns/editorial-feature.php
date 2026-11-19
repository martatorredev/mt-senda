<?php
/**
 * Title: Editorial feature
 * Slug: mt-senda/editorial-feature
 * Categories: featured, text
 * Description: A featured editorial section with an image and introductory text.
 *
 * @package MTSenda
 */
?>

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center">

    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large">
            <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/editorial-feature.svg' ) ); ?>" alt="" />
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center"} -->
    <div class="wp-block-column is-vertically-aligned-center">

        <!-- wp:heading {"level":2} -->
        <h2 class="wp-block-heading"><?php esc_html_e( 'Stories worth sharing.', 'mt-senda' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><?php esc_html_e( 'A little space to explore ideas, discover new perspectives, and find inspiration in the everyday.', 'mt-senda' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Explore the stories', 'mt-senda' ); ?></a></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:column -->

</div>
<!-- /wp:columns -->
