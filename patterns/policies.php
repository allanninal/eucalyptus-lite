<?php
/**
 * Title: Good to know
 * Slug: eucalyptus-lite/policies
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
<section class="wp-block-group alignfull eu-section" id="policies">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Before you come', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Good to know', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-policy"} -->
<div class="wp-block-group eu-card eu-policy">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Arrival', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Please arrive 15 minutes before your treatment, to change, sip some tea and settle in.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-policy"} -->
<div class="wp-block-group eu-card eu-policy">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Cancellation', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Please give us at least 24 hours’ notice to cancel or move a booking. Inside 24 hours we may charge half the treatment price.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-policy"} -->
<div class="wp-block-group eu-card eu-policy">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Late arrival', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'We end on time so the next guest is not kept waiting, so a late arrival means a shorter treatment at the full price.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-policy"} -->
<div class="wp-block-group eu-card eu-policy">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Minimum age', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Guests must be 16 or over. Under 18s need a parent or guardian to book and to sign for them.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-policy"} -->
<div class="wp-block-group eu-card eu-policy">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'What to wear', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Robes and slippers are ours. Wear what is comfortable to arrive in; you are always covered with a towel or sheet, and only the area being treated is uncovered.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-health"} -->
<div class="wp-block-group eu-card eu-health">
<!-- wp:heading {"level":3,"className":"eu-fac__name"} -->
<h3 class="wp-block-heading eu-fac__name"><?php echo esc_html__( 'Health and safety', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'The notes on each treatment are general and are not medical advice. Tell us about pregnancy, injuries, allergies, medicines and health conditions when you book, and again at your consultation. If you are unsure, ask your doctor before you book. We may change or decline a treatment to keep you safe. If you feel unwell during a treatment, tell your therapist at once.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
