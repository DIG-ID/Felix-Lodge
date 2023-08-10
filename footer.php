		<?php get_template_part( 'template-parts/footer', 'main' ); ?>
		<?php wp_footer(); ?>
		<?php if (is_singular('angebot')) : ?>
			<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/flowbite.min.js"></script>
		<?php endif; ?>
	</body>

</html>
