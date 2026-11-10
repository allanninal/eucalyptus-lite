<?php
/**
 * Title: Our story
 * Slug: eucalyptus-lite/story
 * Categories: eucalyptus-lite
 * Description: The story behind the business, with a few key numbers.
 * Keywords: about, story, history, numbers
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
<section class="wp-block-group alignfull eu-section" id="about">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"48%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:48%">
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"8rem"},"className":"eu-tiles"} -->
<div class="wp-block-group eu-tiles">
<!-- wp:image {"id":"__ID_massage__","sizeSlug":"large","linkDestination":"none","className":"eu-tile"} -->
<figure class="wp-block-image size-large eu-tile"><img src="__SRC_massage__" alt="<?php echo esc_attr__( 'Hands working along a guest’s shoulder during a massage', 'eucalyptus-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_massage__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Massage', 'eucalyptus-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_facials__","sizeSlug":"large","linkDestination":"none","className":"eu-tile"} -->
<figure class="wp-block-image size-large eu-tile"><img src="__SRC_facials__" alt="<?php echo esc_attr__( 'A cucumber facial with a bowl of fresh petals and fruit', 'eucalyptus-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_facials__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Facials', 'eucalyptus-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_sauna__","sizeSlug":"large","linkDestination":"none","className":"eu-tile"} -->
<figure class="wp-block-image size-large eu-tile"><img src="__SRC_sauna__" alt="<?php echo esc_attr__( 'The wood-panelled infrared sauna suite', 'eucalyptus-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_sauna__"/><figcaption class="wp-element-caption"><?php echo esc_html__( 'Sauna', 'eucalyptus-lite' ); ?></figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"52%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:52%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Our Story', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo wp_kses_post( __( 'Rooted in care.<br>Grounded in expertise.', 'eucalyptus-lite' ) ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'Serenity &amp; Stone was founded in 2012 by a team of licensed therapists who believed that a spa should feel both professional and deeply human. We opened our doors in Brooklyn with six treatment rooms, a commitment to using sustainably sourced products, and a single guiding principle: every guest leaves feeling more themselves.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'Over twelve years, we have grown to seven suites, two private infrared sauna rooms, and a team of fifteen therapists and estheticians, each with at least five years of professional experience.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'Every suite is cleaned and reset between guests, to the hygiene and safety standards our therapists trained under.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://example.com/book" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Reserve Your Visit', 'eucalyptus-lite' ); ?></a></div>
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
