<?php
/**
 * Title: Hero
 * Slug: eucalyptus-lite/hero
 * Categories: eucalyptus-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package eucalyptus-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"eu-section eu-hero"} -->
<section class="wp-block-group alignfull eu-section eu-hero" id="hero">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"52%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Day Spa &amp; Wellness Retreat — Brooklyn, NY', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"className":"eu-hero__title"} -->
<h1 class="wp-block-heading eu-hero__title"><?php echo wp_kses_post( __( 'Where stillness<br><em>restores you.</em>', 'eucalyptus-lite' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted eu-hero__lede"} -->
<p class="eu-muted eu-hero__lede"><?php echo esc_html__( 'Massage, advanced facials, body rituals, and private sauna suites — designed to return you to yourself.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://example.com/book" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Book a Treatment', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_packages__"><?php echo esc_html__( 'View Packages', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"className":"eu-note","fontSize":"small"} -->
<p class="has-small-font-size eu-note"><?php echo esc_html__( 'No membership required — walk-in bookings welcome', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"48%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
<!-- wp:image {"id":"__ID_hero__","sizeSlug":"large","linkDestination":"none","className":"is-hero eu-hero__photo"} -->
<figure class="wp-block-image size-large is-hero eu-hero__photo"><img src="__SRC_hero__" alt="<?php echo esc_attr__( 'Warm basalt stones and a glowing candle in a treatment room', 'eucalyptus-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_hero__"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
