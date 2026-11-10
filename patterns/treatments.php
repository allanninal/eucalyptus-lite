<?php
/**
 * Title: Treatments
 * Slug: eucalyptus-lite/treatments
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
<section class="wp-block-group alignfull eu-section" id="treatments">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Our Treatments', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Rituals crafted for you', 'eucalyptus-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"eu-lede eu-muted"} -->
<p class="has-text-align-center eu-lede eu-muted"><?php echo esc_html__( 'Each treatment is personalised to your body and intentions on the day. All sessions include a pre-treatment consultation.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-cat"} -->
<div class="wp-block-group eu-cat">
<!-- wp:heading {"level":3,"className":"eu-cat__title"} -->
<h3 class="wp-block-heading eu-cat__title" id="treatments-massage"><?php echo esc_html__( 'Massage', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'From firm deep-tissue work to silk-soft relaxation, each massage is tailored to you on the day.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Swedish Relaxation Massage', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$110', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Long, flowing strokes at a gentle to medium pressure, for a slow, unhurried hour.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about injuries, pregnancy or health conditions when you book, so we can adjust.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Deep Tissue Massage', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$130', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Firm, slow pressure, worked on one area at a time.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about injuries, blood clots or blood-thinning medicine before we start.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:paragraph {"className":"eu-badge"} -->
<p class="eu-badge"><?php echo esc_html__( 'Most requested', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Hot Stone Massage', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '75 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$155', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Basalt stones, warmed to 130°F, used alongside the massage strokes.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Not during pregnancy, or with high or low blood pressure or heart conditions, unless your doctor agrees.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Aromatherapy Massage', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$125', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'A custom essential oil blend: choose lavender, citrus or cedarwood.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Uses essential oils; tell us about allergies or pregnancy.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Prenatal Massage', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$120', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'A gentle side-lying massage for mothers-to-be. Please check with your own doctor before booking.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> After the first trimester. Tell us you are pregnant when you book.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Couples Massage', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$220', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Two therapists, one treatment room — share the experience side by side.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about injuries, pregnancy or health conditions when you book, so we can adjust.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-cat"} -->
<div class="wp-block-group eu-cat">
<!-- wp:heading {"level":3,"className":"eu-cat__title"} -->
<h3 class="wp-block-heading eu-cat__title" id="treatments-facials"><?php echo esc_html__( 'Facials', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'Every facial begins with a skin analysis, so your therapist can choose the right products for you.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:paragraph {"className":"eu-badge"} -->
<p class="eu-badge"><?php echo esc_html__( 'Most requested', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Signature Glow Facial', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$115', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Double cleanse, enzyme exfoliation, a custom serum and an LED light session.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about skin conditions, allergies or recent sun exposure.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Hydrating Restore Facial', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '75 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$135', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'A hyaluronic acid serum and a peptide mask, for skin that feels dry.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us if you are pregnant. Tell us about skin conditions, allergies or recent sun exposure.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Clarifying Purify Facial', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$115', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'A salicylic peel, extractions and a clarifying mask, for oily or breakout-prone skin.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about skin conditions, allergies or recent sun exposure. Not during pregnancy; tell us if you use acne or retinoid medicine.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Microcurrent Sculpting Facial', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '90 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$165', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Microcurrent sculpting, a retinol micro-peel and a peptide mask.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Not with a pacemaker or other implanted device, or during pregnancy. Tell us about skin conditions, allergies or recent sun exposure, and if you use retinoid medicine.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Sensitive Calm Facial', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$110', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Fragrance-free formulas, cooling jade tool, and oat-silk mask for reactive skin.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us if you are pregnant. Tell us about skin conditions, allergies or recent sun exposure.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-cat"} -->
<div class="wp-block-group eu-cat">
<!-- wp:heading {"level":3,"className":"eu-cat__title"} -->
<h3 class="wp-block-heading eu-cat__title" id="treatments-body"><?php echo esc_html__( 'Body Treatments', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'Full-body rituals that exfoliate, soften and warm, from scalp to sole.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Salt &amp; Sage Body Scrub', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '45 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$90', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Dead Sea salt and dried sage exfoliate, followed by a warm rinse and shea butter seal.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about skin conditions, allergies or recent sun exposure.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:paragraph {"className":"eu-badge"} -->
<p class="eu-badge"><?php echo esc_html__( 'Most requested', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Seaweed Wrap', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '60 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$120', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'A warm marine algae wrap, with the skin cocooned in soft blankets.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about skin conditions, allergies (including seaweed or iodine) or a thyroid condition.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Cocoa Butter Body Ritual', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '75 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$140', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'A warm cocoa-sugar scrub, a warm oil massage and a butter mask.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about skin conditions, allergies or recent sun exposure.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Back Facial', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '45 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$95', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Deep cleanse, exfoliation, extractions, and masking for the hard-to-reach back.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Tell us about skin conditions, allergies or recent sun exposure.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Himalayan Salt Stone Ritual', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '75 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$150', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Warm salt stones glide over the skin in a slow, restorative full-body treatment.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Not during pregnancy, or with high or low blood pressure or heart conditions, unless your doctor agrees.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-cat"} -->
<div class="wp-block-group eu-cat">
<!-- wp:heading {"level":3,"className":"eu-cat__title"} -->
<h3 class="wp-block-heading eu-cat__title" id="treatments-sauna"><?php echo esc_html__( 'Sauna &amp; Heat', 'eucalyptus-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( 'Our private infrared sauna suites offer heat, quiet and deep relaxation at your own pace.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"},"className":"eu-cards"} -->
<div class="wp-block-group eu-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Infrared Sauna — Single', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '45 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$55', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Private infrared suite with colour lighting you can change and chilled eucalyptus-lite towels.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Not during pregnancy, or with high or low blood pressure or heart conditions, unless your doctor agrees.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Infrared Sauna — Couple', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '45 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$90', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Share the heat — our spacious duo suite seats two comfortably.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Not during pregnancy, or with high or low blood pressure or heart conditions, unless your doctor agrees.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:paragraph {"className":"eu-badge"} -->
<p class="eu-badge"><?php echo esc_html__( 'Most requested', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Sauna &amp; Scrub Combo', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '90 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$145', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'Infrared session followed immediately by the Salt &amp; Sage Body Scrub.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Not during pregnancy, or with high or low blood pressure or heart conditions, unless your doctor agrees. Tell us about skin conditions, allergies or recent sun exposure.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"eu-card eu-item"} -->
<div class="wp-block-group eu-card eu-item">
<!-- wp:heading {"level":4,"className":"eu-item__name"} -->
<h4 class="wp-block-heading eu-item__name"><?php echo esc_html__( 'Sauna &amp; Facial Combo', 'eucalyptus-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"eu-item__meta"} -->
<div class="wp-block-group eu-item__meta">
<!-- wp:paragraph {"className":"eu-muted"} -->
<p class="eu-muted"><?php echo esc_html__( '105 min', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-price"} -->
<p class="eu-price"><?php echo esc_html__( '$160', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"eu-muted","fontSize":"small"} -->
<p class="has-small-font-size eu-muted"><?php echo esc_html__( 'An infrared session followed immediately by the Signature Glow Facial.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"eu-caution","fontSize":"small"} -->
<p class="has-small-font-size eu-caution"><?php echo wp_kses_post( __( '<strong>Please note:</strong> Not during pregnancy, or with high or low blood pressure or heart conditions, unless your doctor agrees. Tell us about skin conditions, allergies or recent sun exposure.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","className":"eu-muted eu-note","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size eu-muted eu-note"><?php echo wp_kses_post( __( 'These notes are general, not medical advice. See <a href="__PAGE_visit__#policies">Health and safety</a>.', 'eucalyptus-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"eu-cta"} -->
<div class="wp-block-buttons eu-cta">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://example.com/book" target="_blank" rel="noreferrer noopener"><?php echo esc_html__( 'Book a Treatment', 'eucalyptus-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
<!-- wp:paragraph {"align":"center","className":"eu-note","fontSize":"small"} -->
<p class="has-text-align-center has-small-font-size eu-note"><?php echo esc_html__( 'Booking opens our online booking system in a new tab.', 'eucalyptus-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo eucalyptus_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
