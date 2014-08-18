<?php
/**
 * The index file.
 * @package SocialSparks
 * @since SocialSparks 1.0.0
*/
get_header(); ?>
<div class="container">
	<div class="col-md-8">
		<?php if (have_posts()) : 
            while(have_posts()) : the_post(); ?>
		<div id="posts">
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<small>Author: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php the_time('F jS, Y g:i a'); ?> | Posted in
			
			<?php 
				$categories = get_the_category();
                $separator = ", ";
                $output = '';

                if ($categories) {
					foreach ($categories as $category){
						$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
					}
					
					echo trim($output, $separator);
				}
			?>
			
		</small>
			<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
		</div>
			<p>
				<?php echo get_the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Read more&raquo;</a>
			</p>
		</div>
		    <?php endwhile;
                else:
                    echo '<p>No Content Found</p>';
        endif; ?>
	</div>
	<div class="col-md-4">
<?php get_sidebar('main-sidebar'); ?></div>
</div>
<?php get_footer(); ?>