<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-8 lg:py-20' ); ?>>
	<div class="container mx-auto px-8 xl:px-0 grid grid-cols-1 lg:grid-cols-12">
		<div class="post-content-wrapper col-span-8">
			<h1 class="title-normal"><?php the_title(); ?></h1>
			<?php
			if ( has_post_thumbnail() ) :
				?>
				<figure class="mb-16 post__image">
					<?php the_post_thumbnail( 'full' ); ?>
				</figure>
				<?php
			endif;
			?>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>