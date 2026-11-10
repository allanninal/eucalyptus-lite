<?php
/**
 * Title: Facilities
 * Slug: eucalyptus-lite/facilities
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"bg-alt","className":"eu-section"} -->
<section class="wp-block-group has-bg-alt-background-color has-background alignfull eu-section" id="facilities">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'The Space', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'A sanctuary designed for stillness', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"eu-lede eu-muted"} -->
<p class="has-text-align-center eu-lede eu-muted"><?php echo esc_html__( 'Every corner of Serenity &amp; Stone has been designed to feel calm from the moment you arrive.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-fac"} -->
<div class="wp-block-group eu-fac">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Infrared Sauna Suites', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Two private infrared suites with colour lighting you can change, pre-heated before you arrive.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-fac"} -->
<div class="wp-block-group eu-fac">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Relaxation Lounge', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Warm stone seating, weighted eye masks, and herbal teas — arrive early and unwind before your treatment.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-fac"} -->
<div class="wp-block-group eu-fac">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Rinse Showers', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Multiple pressure settings and a cold rinse option, for before or after your treatment.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-fac"} -->
<div class="wp-block-group eu-fac">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Treatment Suites', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Seven private treatment rooms with heated tables, weighted blankets, and bespoke ambient soundscapes.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-fac"} -->
<div class="wp-block-group eu-fac">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Couples Suite', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Our grand duo room with twin treatment tables, a shared sauna corner, and a private dressing area.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-fac"} -->
<div class="wp-block-group eu-fac">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Spa Boutique', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Curated retail — the same professional-grade oils, serums, and scrubs used in your treatments.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
