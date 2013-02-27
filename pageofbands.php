<?php
/**
 * Template Name: Page of Bands
 *
 * Selectable from a dropdown menu on the edit page screen.
 */
?>

<?php get_header(); ?>
    <div id="container">
      <div id="content">
<?php 
$type = 'fhf_band';
$args=array(
 'post_type' => $type,
 'post_status' => 'publish',
 'paged' => $paged,
 'posts_per_page' => 2,
 'ignore_sticky_posts'=> 1
);
$temp = $wp_query; // assign ordinal query to temp variable for later use  
$wp_query = null;
$wp_query = new WP_Query($args); 
?>
<?php get_template_part( 'loop', 'index' );?>
  </div><!-- #content -->
</div><!-- #container -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>