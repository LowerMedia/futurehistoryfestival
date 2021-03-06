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
<?php/* 
$type = 'band';
$args=array(
 'post_type' => $type,
 'post_status' => 'publish',
 'paged' => $paged,
 'posts_per_page' => 10,
 'ignore_sticky_posts'=> 1
);
$temp = $wp_query; // assign ordinal query to temp variable for later use  
$wp_query = null;
$wp_query = new WP_Query($args); 
?>
<?php get_template_part( 'loop', 'index' );
*/?>
<?php
$args = array( 'post_type' => 'band', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
	the_title();
	echo '<div class="entry-content">';
	the_content();
	echo '</div>';
endwhile;
?>

  </div><!-- #content -->
</div><!-- #container -->
<?php get_footer(); ?>