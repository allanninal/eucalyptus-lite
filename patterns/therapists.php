<?php
/**
 * Title: Therapists
 * Slug: eucalyptus-lite/therapists
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
<section class="wp-block-group has-bg-alt-background-color has-background alignfull eu-section" id="therapists">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Your therapists', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'The hands behind the treatments', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"eu-lede eu-muted"} -->
<p class="has-text-align-center eu-lede eu-muted"><?php echo esc_html__( 'Ask for a therapist by name when you book.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"13rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-therapist"} -->
<div class="wp-block-group eu-card eu-therapist">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Maya Okafor', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-therapist__title"} -->
<p class="eu-therapist__title"><?php echo esc_html__( 'Senior massage therapist', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( '11 years of experience', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo wp_kses_post( __( '<strong>Specialties:</strong> Deep tissue, Prenatal massage, Swedish massage', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-therapist"} -->
<div class="wp-block-group eu-card eu-therapist">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Lucas Brandt', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-therapist__title"} -->
<p class="eu-therapist__title"><?php echo esc_html__( 'Massage and heat therapist', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( '8 years of experience', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo wp_kses_post( __( '<strong>Specialties:</strong> Hot stone, Aromatherapy massage, Sauna sessions', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-therapist"} -->
<div class="wp-block-group eu-card eu-therapist">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Priya Nair', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-therapist__title"} -->
<p class="eu-therapist__title"><?php echo esc_html__( 'Lead esthetician', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( '9 years of experience', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo wp_kses_post( __( '<strong>Specialties:</strong> Facials, Sensitive skin, Microcurrent', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-therapist"} -->
<div class="wp-block-group eu-card eu-therapist">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Hana Kimura', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-therapist__title"} -->
<p class="eu-therapist__title"><?php echo esc_html__( 'Body treatment specialist', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( '6 years of experience', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo wp_kses_post( __( '<strong>Specialties:</strong> Scrubs, Wraps, Back facials', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
