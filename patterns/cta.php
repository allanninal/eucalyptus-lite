<?php
/**
 * Title: Book your visit
 * Slug: eucalyptus-lite/cta
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"sage-dark","textColor":"mist","className":"eu-section eu-band"} -->
<section class="wp-block-group has-mist-color has-text-color has-sage-dark-background-color has-background alignfull eu-section eu-band" id="book">
<!-- wp:heading {"textAlign":"center","textColor":"mist"} -->
<h2 class="wp-block-heading has-text-align-center has-mist-color has-text-color"><?php echo esc_html__( 'Ready to restore?', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"eu-lede"} -->
<p class="has-text-align-center eu-lede"><?php echo esc_html__( 'Book in minutes or call us directly. Same-day availability often opens after 11 am.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"eu-btn-light"} -->
<div class="wp-block-button eu-btn-light"><a class="wp-block-button__link wp-element-button" href="https://example.com/book" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Book Online', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline eu-on-dark"} -->
<div class="wp-block-button is-style-outline eu-on-dark"><a class="wp-block-button__link wp-element-button" href="tel:+17185550192"><?php echo esc_html__( '+1 (718) 555-0192', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"align":"center","className":"eu-lede","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size eu-lede"><?php echo esc_html__( 'Book Online opens our online booking system in a new tab.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
