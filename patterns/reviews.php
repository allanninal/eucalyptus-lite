<?php
/**
 * Title: Guest reviews
 * Slug: eucalyptus-lite/reviews
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
<section class="wp-block-group alignfull eu-section" id="reviews">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Guest Experiences', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'What our guests say', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-quote"} -->
<div class="wp-block-group eu-card eu-quote">
<!-- wp:paragraph {"className":"eu-stars"} -->
<p class="eu-stars"><?php echo esc_html__( '★★★★★', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__text"} -->
<p class="eu-quote__text"><?php echo esc_html__( '“The Sanctuary day was the most relaxing thing I have done in years. I floated out of there. Everything from the sauna to the hot stone massage was immaculate.”', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__by"} -->
<p class="eu-quote__by"><?php echo wp_kses_post( __( '<strong>Elisa M.</strong><br>The Sanctuary Package', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-quote"} -->
<div class="wp-block-group eu-card eu-quote">
<!-- wp:paragraph {"className":"eu-stars"} -->
<p class="eu-stars"><?php echo esc_html__( '★★★★★', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__text"} -->
<p class="eu-quote__text"><?php echo esc_html__( '“The Signature Glow Facial therapist read my skin exactly right and explained every product she used. The LED session at the end was a lovely finish.”', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__by"} -->
<p class="eu-quote__by"><?php echo wp_kses_post( __( '<strong>Camille D.</strong><br>Signature Glow Facial', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-quote"} -->
<div class="wp-block-group eu-card eu-quote">
<!-- wp:paragraph {"className":"eu-stars"} -->
<p class="eu-stars"><?php echo esc_html__( '★★★★★', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__text"} -->
<p class="eu-quote__text"><?php echo esc_html__( '“We booked the Couples Retreat for our anniversary. The side-by-side massage room was perfect, and the champagne and fruit board was such a beautiful touch. Already rebooked.”', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__by"} -->
<p class="eu-quote__by"><?php echo wp_kses_post( __( '<strong>James &amp; Priya T.</strong><br>Couples Retreat Package', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-quote"} -->
<div class="wp-block-group eu-card eu-quote">
<!-- wp:paragraph {"className":"eu-stars"} -->
<p class="eu-stars"><?php echo esc_html__( '★★★★★', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__text"} -->
<p class="eu-quote__text"><?php echo esc_html__( '“The infrared sauna suite feels like a private sanctuary. I come monthly and always pair it with the scrub, and the whole afternoon feels unhurried.”', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__by"} -->
<p class="eu-quote__by"><?php echo wp_kses_post( __( '<strong>Naomi K.</strong><br>Sauna &amp; Scrub Combo', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-quote"} -->
<div class="wp-block-group eu-card eu-quote">
<!-- wp:paragraph {"className":"eu-stars"} -->
<p class="eu-stars"><?php echo esc_html__( '★★★★★', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__text"} -->
<p class="eu-quote__text"><?php echo esc_html__( '“The deep tissue massage was exactly the right level of pressure — firm without being painful. My therapist clearly knew anatomy and checked in on pressure all the way through.”', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__by"} -->
<p class="eu-quote__by"><?php echo wp_kses_post( __( '<strong>Daniel R.</strong><br>Deep Tissue Massage', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-quote"} -->
<div class="wp-block-group eu-card eu-quote">
<!-- wp:paragraph {"className":"eu-stars"} -->
<p class="eu-stars"><?php echo esc_html__( '★★★★★', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__text"} -->
<p class="eu-quote__text"><?php echo esc_html__( '“Serenity &amp; Stone sets a new standard. The space is beautifully designed, the staff are genuinely attentive, and the treatments deliver what they promise. My go-to for reset days.”', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-quote__by"} -->
<p class="eu-quote__by"><?php echo wp_kses_post( __( '<strong>Vivienne H.</strong><br>Restoration Package', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
