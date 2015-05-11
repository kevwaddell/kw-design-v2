<?php
/**
 * The page file
 */
?>
<?php get_header(); ?>

<?php get_template_parts( array( 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer(); ?>