<?php
/**
 * Title: Gift cards
 * Slug: eucalyptus-lite/gift-cards
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"eu-section"} -->
<section class="wp-block-group alignfull eu-section" id="gift-cards">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"40%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-giftcard"} -->
<div class="wp-block-group eu-giftcard">
<!-- wp:paragraph {"className":"eu-giftcard__kicker"} -->
<p class="eu-giftcard__kicker"><?php echo esc_html__( 'Gift Card', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-giftcard__name"} -->
<p class="eu-giftcard__name"><?php echo esc_html__( 'Serenity &amp; Stone', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-giftcard__tagline"} -->
<p class="eu-giftcard__tagline"><?php echo esc_html__( 'A sanctuary of calm, crafted for you.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"60%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Gift the Experience', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Give the gift of stillness.', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'Spa gift cards never expire and can be redeemed for any treatment, package, or product in our boutique. Available in digital and printed formats.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"eu-chips"} -->
<div class="wp-block-group eu-chips">
<!-- wp:paragraph {"className":"eu-chip"} -->
<p class="eu-chip"><?php echo esc_html__( '$50', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-chip"} -->
<p class="eu-chip"><?php echo esc_html__( '$100', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-chip"} -->
<p class="eu-chip"><?php echo esc_html__( '$150', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-chip"} -->
<p class="eu-chip"><?php echo esc_html__( '$200', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-chip"} -->
<p class="eu-chip"><?php echo esc_html__( '$250', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-chip"} -->
<p class="eu-chip"><?php echo esc_html__( '$500', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_shop|visit__"><?php echo esc_html__( 'Purchase Gift Card', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
