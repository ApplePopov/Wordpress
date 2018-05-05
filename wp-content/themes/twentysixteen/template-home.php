<?php
/**
 *
 * Template Name: Home Page
 *
 * The template for displaying home page. 
 * @package Business_Plan _Pro
 * 
 * 
 */
get_header(); ?>
<div id="page-wrap" class="container">
	<div id="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	</div> <!-- end content -->
</div>
<?php get_footer();?>
