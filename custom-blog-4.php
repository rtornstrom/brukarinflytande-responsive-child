<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
Template Name: FBI Custom Blog - User 4
 *
 * @file           blog-excerpt.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/blog-excerpt.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header();
?>

<div id="content-blog" class="<?php echo esc_attr( implode( ' ', responsive_get_content_classes() ) ); ?>">

	<?php get_template_part( 'loop-header', get_post_type() ); ?>

	<?php
	global $wp_query, $paged;
	if ( get_query_var( 'paged' ) ) {
		$paged = get_query_var( 'paged' );
	}elseif ( get_query_var( 'page' ) ) {
		$paged = get_query_var( 'page' );
	}
	else {
		$paged = 1;
	}
	// display posts only for user #4
	$blog_query = new WP_Query( array( 'author' => '4', 'post_type' => 'post', 'paged' => $paged ) );
	$temp_query = $wp_query;
	$wp_query = null;
	$wp_query = $blog_query;

	if ( $blog_query->have_posts() ) :

		while( $blog_query->have_posts() ) : $blog_query->the_post();
			?>

			<?php responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php get_template_part( 'post-meta', get_post_type() ); ?>

				<div class="post-entry">
					<?php if ( has_post_thumbnail() ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>
					<?php the_excerpt(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
				</div><!-- end of .post-entry -->

				<?php get_template_part( 'post-data', get_post_type() ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

		<?php
		endwhile;

		if ( $wp_query->max_num_pages > 1 ) :
			?>
			<div class="navigation">
				<div class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'responsive' ), $wp_query->max_num_pages ); ?></div>
				<div class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'responsive' ), $wp_query->max_num_pages ); ?></div>
			</div><!-- end of .navigation -->
		<?php
		endif;

	else :

		get_template_part( 'loop-no-posts', get_post_type() );

	endif;
	$wp_query = $temp_query;
	wp_reset_postdata();
	?>

</div><!-- end of #content-blog -->

<?php if ( is_active_sidebar( 'fbi-sidebar-4' ) ) : ?>
<?php responsive_widgets_before(); // above widgets container hook ?>
        <div id="widgets" class="<?php echo implode( ' ', responsive_get_sidebar_classes() ); ?>">
                <?php responsive_widgets(); // above widgets hook ?>
		<?php dynamic_sidebar( 'fbi-sidebar-4' ); ?>

                <?php responsive_widgets_end(); // after widgets hook ?>
        </div><!-- end of #widgets -->
<?php responsive_widgets_after(); // after widgets container hook ?>
<?php else : ?>
<?php get_sidebar(); ?>
<?php endif; ?>
<?php get_footer(); ?>
