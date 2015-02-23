<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

<div class="medium-4 large-4 columns">
			<?php if ( has_post_thumbnail() ): ?>
				<?php the_post_thumbnail(); ?>
			<?php elseif ( !has_post_thumbnail() ): ?>
				<?php lorempixel(); ?>
			<?php endif; ?>
</div>
<div class="medium-8 large-8 columns bg-light">
		<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php FoundationPress_entry_meta(); ?>
	</header>
	<div  class="entry-content">
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	</div>

</article>

