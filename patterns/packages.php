<?php
/**
 * Title: Spa packages
 * Slug: eucalyptus-lite/packages
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
<section class="wp-block-group has-bg-alt-background-color has-background alignfull eu-section" id="packages">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Spa Packages', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Curated day-retreat experiences', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"eu-lede eu-muted"} -->
<p class="has-text-align-center eu-lede eu-muted"><?php echo esc_html__( 'Combine treatments into a seamless half-day or full-day escape. Every package includes complimentary robes, slippers, and lounge access.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"19rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-pkg"} -->
<div class="wp-block-group eu-card eu-pkg">
<!-- wp:heading {"level":3,"className":"eu-pkg__name"} -->
<h3 class="wp-block-heading eu-pkg__name"><?php echo esc_html__( 'The Restoration', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted eu-pkg__sub"} -->
<p class="eu-muted eu-pkg__sub"><?php echo esc_html__( 'Half-day pause', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo wp_kses_post( __( '<span class="eu-pkg__price">$285</span> / 3 hours', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-label"} -->
<p class="eu-label"><?php echo esc_html__( 'What\'s included', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"eu-checks"} -->
<ul class="wp-block-list eu-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Swedish Relaxation Massage (60 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature Glow Facial (60 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Herbal foot soak', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal refreshment tray', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://example.com/book" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Book The Restoration', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-pkg eu-pkg\u002d\u002dpopular"} -->
<div class="wp-block-group eu-card eu-pkg eu-pkg--popular">
<!-- wp:paragraph {"className":"eu-badge"} -->
<p class="eu-badge"><?php echo esc_html__( 'Most popular', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"eu-pkg__name"} -->
<h3 class="wp-block-heading eu-pkg__name"><?php echo esc_html__( 'The Sanctuary', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted eu-pkg__sub"} -->
<p class="eu-muted eu-pkg__sub"><?php echo esc_html__( 'Our signature full-day retreat', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo wp_kses_post( __( '<span class="eu-pkg__price">$495</span> / 5.5 hours', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-label"} -->
<p class="eu-label"><?php echo esc_html__( 'What\'s included', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"eu-checks"} -->
<ul class="wp-block-list eu-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Infrared Sauna Suite (45 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Hot Stone Massage (75 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Signature Glow Facial (60 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Salt &amp; Sage Body Scrub (45 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Light spa lunch included', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Complimentary robe &amp; slippers', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://example.com/book" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Book The Sanctuary', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-pkg"} -->
<div class="wp-block-group eu-card eu-pkg">
<!-- wp:heading {"level":3,"className":"eu-pkg__name"} -->
<h3 class="wp-block-heading eu-pkg__name"><?php echo esc_html__( 'Couples Retreat', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted eu-pkg__sub"} -->
<p class="eu-muted eu-pkg__sub"><?php echo esc_html__( 'Share the stillness together', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo wp_kses_post( __( '<span class="eu-pkg__price">$580</span> / 4 hours', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-label"} -->
<p class="eu-label"><?php echo esc_html__( 'What\'s included', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"eu-checks"} -->
<ul class="wp-block-list eu-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Couples Sauna Suite (45 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Couples Massage, side-by-side (60 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Two Signature Glow Facials (60 min each)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Champagne and seasonal fruit board', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Matching robes &amp; slippers', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://example.com/book" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Book Couples Retreat', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-pkg"} -->
<div class="wp-block-group eu-card eu-pkg">
<!-- wp:heading {"level":3,"className":"eu-pkg__name"} -->
<h3 class="wp-block-heading eu-pkg__name"><?php echo esc_html__( 'The Revive', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted eu-pkg__sub"} -->
<p class="eu-muted eu-pkg__sub"><?php echo esc_html__( 'Express 2-hour refresh', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo wp_kses_post( __( '<span class="eu-pkg__price">$195</span> / 2 hours', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-label"} -->
<p class="eu-label"><?php echo esc_html__( 'What\'s included', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"eu-checks"} -->
<ul class="wp-block-list eu-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Deep Tissue or Swedish Massage (60 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Hydrating Restore Facial (60 min)', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Herbal tea on arrival', 'eucalyptus-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://example.com/book" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Book The Revive', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
