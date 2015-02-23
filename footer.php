</section>

<div class="wrapper">
<footer class="row">
<div class="large-12 column">
<svg width="3.2em" height="3.2em"><use xlink:href="#ruche"></use></svg>
<svg width="3.2em" height="3.2em"><use xlink:href="#alveole"></use></svg>

	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>
	<?php do_action('foundationPress_after_footer'); ?>
</footer>
</div>
</div>
<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
