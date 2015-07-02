<?php get_header(); ?>
<?php do_action('foundationPress_before_content'); ?>
<div class="wrapper brand text-center bg-light-min">
<?php 
	$post_accueil = get_post(1030);
	$texte_accueil = $post_accueil -> post_content;
	$img_accueil = get_the_post_thumbnail( $post_accueil -> ID, 'full' );
	echo $texte_accueil;
	echo $img_accueil;
?>
</div>
<div class="contain-to-grid sticky">
<?php get_template_part('parts/top-bar'); ?>
</div>
<div>
		<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; // end have_posts() check ?>

	<?php /* Display navigation to next/previous pages when applicable */ ?>
	<?php if ( function_exists('FoundationPress_pagination') ) { FoundationPress_pagination(); } else if ( is_paged() ) { ?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>
</div>
<?php do_action('foundationPress_after_content'); ?>
</div>
</div>

<?php get_footer(); ?>
