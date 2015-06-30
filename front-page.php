<?php get_header(); ?>
<?php do_action('foundationPress_before_content'); ?>
<div class="wrapper brand CoverImage" style="background-image:url(<?php header_image(); ?>);">
<div class="row">

	<div class="medium-8 large-8 columns">
		<header>
			<?php 
				$post_accueil = get_post(1030);
				$texte_accueil = $post_accueil -> post_content;
				$img_accueil = get_the_post_thumbnail( $post_accueil -> ID, 'full' );;
				echo $texte_accueil;
			?>	
		</header>
	</div>
	<div class="medium-4 large-4 columns">
			<?php echo $img_accueil; ?>
	</div>
</div>
</div>

<div class="wrapper bg-dark">




</div>
<?php do_action('foundationPress_after_content'); ?>
</div>
</div>

<?php get_footer(); ?>
