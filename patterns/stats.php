<?php
/**
 * Title: Key numbers
 * Slug: eucalyptus-lite/stats
 * Categories: eucalyptus-lite
 * Viewport Width: 1400
 *
 * @package eucalyptus-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"sage-dark","textColor":"mist","className":"eu-band"} -->
<section class="wp-block-group has-mist-color has-text-color has-sage-dark-background-color has-background alignfull eu-band" id="stats">
<!-- wp:group {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"9rem"},"className":"eu-stats"} -->
<div class="wp-block-group eu-stats">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-stat"} -->
<div class="wp-block-group eu-stat">
<!-- wp:paragraph {"align":"center","className":"eu-stat__value"} -->
<p class="has-text-align-center eu-stat__value"><?php echo esc_html__( '12+', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"eu-stat__label"} -->
<p class="has-text-align-center eu-stat__label"><?php echo esc_html__( 'Years in Brooklyn', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-stat"} -->
<div class="wp-block-group eu-stat">
<!-- wp:paragraph {"align":"center","className":"eu-stat__value"} -->
<p class="has-text-align-center eu-stat__value"><?php echo esc_html__( '7', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"eu-stat__label"} -->
<p class="has-text-align-center eu-stat__label"><?php echo esc_html__( 'Treatment Suites', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-stat"} -->
<div class="wp-block-group eu-stat">
<!-- wp:paragraph {"align":"center","className":"eu-stat__value"} -->
<p class="has-text-align-center eu-stat__value"><?php echo esc_html__( '4,800+', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"eu-stat__label"} -->
<p class="has-text-align-center eu-stat__label"><?php echo esc_html__( 'Guests Welcomed', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-stat"} -->
<div class="wp-block-group eu-stat">
<!-- wp:paragraph {"align":"center","className":"eu-stat__value"} -->
<p class="has-text-align-center eu-stat__value"><?php echo esc_html__( '4.9★', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","className":"eu-stat__label"} -->
<p class="has-text-align-center eu-stat__label"><?php echo esc_html__( 'Average Rating', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
