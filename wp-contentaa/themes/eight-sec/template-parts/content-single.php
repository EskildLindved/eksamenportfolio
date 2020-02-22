<?php
/**
 * @package Eight_Sec
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php        
		if( has_post_thumbnail() ) : 
			the_post_thumbnail();
		endif;

		the_content();
		
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'eight-sec' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span class="page-num-links">',
			'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php eight_sec_posted_on(); ?>
			<?php eight_sec_entry_footer(); ?>
		</footer><!-- .entry-footer -->
</article><!-- #post-## -->