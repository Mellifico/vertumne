<?php get_header(); ?>
<?php do_action('foundationPress_before_content'); ?>
<div class="wrapper brand text-center bg-anim-gradient-a">
<?php 
	$post_accueil = get_post(1030);
	$texte_accueil = $post_accueil -> post_content;
	$img_accueil = get_the_post_thumbnail( $post_accueil -> ID, 'thumbnail' );
	echo $img_accueil;
	echo $texte_accueil;
?>
</div>
<div class="contain-to-grid sticky">
<?php get_template_part('parts/top-bar'); ?>
</div>
<div class="wrapper">
<div class="row">
<div class="medium-6 large-6 columns">
<div class="slider-a">
<?php
$args = array(
    'post_type' => 'attachment',
    'post_status' => 'inherit',
    'posts_per_page' => -1,
    'orderby' => 'rand',
    'tax_query' => array(
		array(
			'taxonomy' => 'classification',
			'field' => 'slug',
			'terms' => array( 'photographie' )
		)
	)
);
$attachments = get_posts($args);
if ($attachments) {
    foreach ($attachments as $attachment) {   
        $img = wp_get_attachment_url($attachment->ID);
        echo '<div><img src="'.$img.'" alt=""/></div>';
    }   
}
?>
</div>
</div>
<div class="medium-6 large-6 columns"></div>
</div>
</div>
<?php do_action('foundationPress_after_content'); ?>
</div>
</div>

<?php get_footer(); ?>
