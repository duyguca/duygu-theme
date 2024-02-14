<?php
/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$name = get_field( 'name' );

$image = get_field('image');


// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
if ( $background_color || $text_color ) {
    $class_name .= ' has-custom-acf-color';
}

// Build a valid style attribute for background and text colors.
$styles = array( 'background-color: ' . $background_color, 'color: ' . $text_color );
$style  = implode( '; ', $styles );
?>

<div <?php echo esc_attr( $anchor ); ?>class="<?php echo esc_attr( $class_name ); ?>" style="<?php echo esc_attr( $style ); ?>">
    <div class="testimonial__col">
      <?php echo $name; ?>
      <img src="<?php echo $image['url']; ?>" />
    </div>
</div>