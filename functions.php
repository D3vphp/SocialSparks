<?php
/**
 * The functions file.
 * @package SocialSparks
 * @since SocialSparks 1.0.0
*/
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'SocialSparks' ),
));
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'Home', 'SocialSparks' ) . ' | ' . get_bloginfo( 'description' );
  }
  return $title;
}
function SocialSparks_setup (){
	// Add Featured Image support
	add_theme_support ('post-thumbnails');
	add_image_size ('small-thumbnail', 180, 120, true);
}
add_action ('after_setup_theme', 'SocialSparks_setup');

register_sidebar (array (
	'name' => 'main-sidebar',
	'description' => 'This is the main sidebar',
	'before_widget' => '<div class="sidebar-div"><div class="inner-widget">',
	'after_widget' => '</div></div>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>'
    ));

function SocialSpark_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<header class="comment-header">
	<?php if ( $args['avatar_size'] != 200 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
	<?php printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
	</header>
	<?php if ( $comment->comment_approved == '0' ) : ?>
		<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		<br />
	<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
		<?php
			/* translators: 1: date, 2: time */
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
		?>
	</div>

	<?php comment_text(); ?>

	<div class="reply">
	<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php
}
?>

