<?php
/**
 * The page file.
 * @package SocialSparks
 * @since SocialSparks 1.0.0
*/
get_header(); ?>
<div class="container">
	<div class="col-md-8">
		<?php if (have_posts()) : 
            while(have_posts()) : the_post(); ?>
		<div id="posts">
		<?php the_content(); ?></div>
		    <?php endwhile;
                else:
                    echo '<p>No Content Found</p>';
        endif; ?>
	</div>
	<div class="col-md-4">
<?php get_sidebar('main-sidebar'); ?></div>
</div>
<?php get_footer(); ?>