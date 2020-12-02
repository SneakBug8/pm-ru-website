<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		if(get_the_post_thumbnail()!=null){
			echo '<div class="post-thumbnail col-sm-12 col-lg-6">';
				the_post_thumbnail();
			echo '</div>';
			echo '<div class="content_right">';
			echo '<header class="entry-header">';
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ){
				echo '<div class="entry-meta">';
				wp_bootstrap_starter_posted_on();
				echo '</div><!-- .entry-meta -->';
			}
		
			echo '</header><!-- .entry-header -->';
			echo '<div class="entry-content">';
			if (is_single()) {
				the_content();
			}
			else{
				$str = get_the_excerpt();
				$aa = "<a href=/?p=".get_the_ID().">".$str."</a>";
				echo $aa;
			}
			echo '</div><!-- .entry-content -->';

			echo '<footer class="entry-footer">';
			wp_bootstrap_starter_entry_footer();
			echo '</footer><!-- .entry-footer -->';
			echo '</div>'; 
		}
		else{
			echo '<div class="content_right">';
			echo '<header class="entry-header">';
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ){
				echo '<div class="entry-meta">';
				wp_bootstrap_starter_posted_on();
				echo '</div><!-- .entry-meta -->';
			}
		
			echo '</header><!-- .entry-header -->';
			echo '<div class="entry-content">';
			if (is_single()) {
				the_content();
			}
			else{
				$str = get_the_excerpt();
				$aa = "<a href=/?p=".get_the_ID().">".$str."</a>";
				echo $aa;
			}
			echo '</div><!-- .entry-content -->';

			echo '<footer class="entry-footer">';
			wp_bootstrap_starter_entry_footer();
			echo '</footer><!-- .entry-footer -->';
			echo '</div>'; 
		}
	?>
</article><!-- #post-## -->
