<?php
 
/**
 * Hot news Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
 
// Create id attribute allowing for custom "anchor" value.
$id = 'hotnews-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
 
// Create class attribute allowing for custom "className" and "align" values.
$className = 'hotnews';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
 
// Load values and assing defaults.
$image = get_field('image') ?: 295;
$title = get_field('title') ?: 'Title';
$content = get_field('content') ?: 'Content is here...';
?>

<div id="<?php echo esc_attr($id); ?>" class="card bg-transparent border-0 <?php echo esc_attr($className); ?>" style="max-width: 330px;">
  <?php echo wp_get_attachment_image( $image, 'full'); ?>
  <div class="card-body p-0 pt-5">
    <h5 class="card-title"><?php echo $title; ?></h5>
    <p class="card-text pt-4"><?php echo $content; ?></p>
  </div>
</div>