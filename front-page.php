<?php get_header(); ?>

<div class="wrapper brand CoverImage" style="background-image:url(<?php header_image(); ?>);">
<div class="row pattern-cube">
<div class="medium-4 large-4 columns">
	
</div>
	<div class="medium-8 large-8 columns dark">
		<header>
			<h1><?php bloginfo( 'name' ); ?></h1>	
			<h2 id="big" class="lettres"><?php bloginfo( 'description' ); ?></h2>
			<h3><small><?php _e('Edited by', 'FoundationPress'); ?> <a href="mailto:<?php bloginfo( 'admin_email' ); ?>"><?php bloginfo( 'admin_email' ); ?></a></small></h3>
		</header>
	</div>
</div>
</div>

<div class="wrapper bg-dark">

	<?php if ( have_posts() ) : ?>

		<?php do_action('foundationPress_before_content'); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

	<?php endif;?>


	<?php do_action('foundationPress_after_content'); ?>

</div>

	</div>
</div>

<?php get_footer(); ?>
