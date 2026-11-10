<?php
/**
 * Title: Visit
 * Slug: eucalyptus-lite/visit-page
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
<section class="wp-block-group has-bg-alt-background-color has-background alignfull eu-section" id="location">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Hours &amp; Location', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Find us in Brooklyn', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:heading {"level":3,"className":"eu-h3"} -->
<h3 class="wp-block-heading eu-h3"><?php echo esc_html__( 'Opening Hours', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-hours"} -->
<div class="wp-block-group eu-hours">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-hours__row"} -->
<div class="wp-block-group eu-hours__row">
<!-- wp:paragraph {"className":"eu-hours__day"} -->
<p class="eu-hours__day"><?php echo esc_html__( 'Monday', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-hours__time"} -->
<p class="eu-hours__time"><?php echo esc_html__( 'Closed', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-hours__row"} -->
<div class="wp-block-group eu-hours__row">
<!-- wp:paragraph {"className":"eu-hours__day"} -->
<p class="eu-hours__day"><?php echo esc_html__( 'Tuesday', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-hours__time"} -->
<p class="eu-hours__time"><?php echo esc_html__( '9:00 am – 7:00 pm', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-hours__row"} -->
<div class="wp-block-group eu-hours__row">
<!-- wp:paragraph {"className":"eu-hours__day"} -->
<p class="eu-hours__day"><?php echo esc_html__( 'Wednesday', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-hours__time"} -->
<p class="eu-hours__time"><?php echo esc_html__( '9:00 am – 7:00 pm', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-hours__row"} -->
<div class="wp-block-group eu-hours__row">
<!-- wp:paragraph {"className":"eu-hours__day"} -->
<p class="eu-hours__day"><?php echo esc_html__( 'Thursday', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-hours__time"} -->
<p class="eu-hours__time"><?php echo esc_html__( '9:00 am – 8:00 pm', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-hours__row"} -->
<div class="wp-block-group eu-hours__row">
<!-- wp:paragraph {"className":"eu-hours__day"} -->
<p class="eu-hours__day"><?php echo esc_html__( 'Friday', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-hours__time"} -->
<p class="eu-hours__time"><?php echo esc_html__( '9:00 am – 8:00 pm', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-hours__row"} -->
<div class="wp-block-group eu-hours__row">
<!-- wp:paragraph {"className":"eu-hours__day"} -->
<p class="eu-hours__day"><?php echo esc_html__( 'Saturday', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-hours__time"} -->
<p class="eu-hours__time"><?php echo esc_html__( '8:00 am – 7:00 pm', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-hours__row"} -->
<div class="wp-block-group eu-hours__row">
<!-- wp:paragraph {"className":"eu-hours__day"} -->
<p class="eu-hours__day"><?php echo esc_html__( 'Sunday', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-hours__time"} -->
<p class="eu-hours__time"><?php echo esc_html__( '9:00 am – 6:00 pm', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status eu-open"} -->
<p class="is-style-open-status eu-open"></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Reservations recommended. Same-day bookings accepted subject to availability.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%">
<!-- wp:heading {"level":3,"className":"eu-h3"} -->
<h3 class="wp-block-heading eu-h3"><?php echo esc_html__( 'Our Address', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-address"} -->
<p class="eu-address"><?php echo esc_html__( '84 Willow Crescent, Brooklyn, NY 11201', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'Near the A/C/F/R trains at Jay St-MetroTech', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<a href="tel:+17185550192">+1 (718) 555-0192</a><br><a href="mailto:hello@serenityandstone.example">hello@serenityandstone.example</a>', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="tel:+17185550192"><?php echo esc_html__( 'Call to Book', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
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
