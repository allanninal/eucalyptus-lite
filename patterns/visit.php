<?php
/**
 * Title: Hours and location
 * Slug: eucalyptus-lite/visit
 * Categories: eucalyptus-lite
 * Description: Address, contact details, directions and opening hours.
 * Keywords: visit, hours, address, location, contact
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
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
