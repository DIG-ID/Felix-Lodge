<article id="post-<?php the_ID(); ?>" <?php post_class( 'pt-36 md:pt-36 lg:pt-72 md:pb-36 container-margins bg-white overflow-hidden' ); ?>>
	<div class="container mx-auto px-0 grid grid-cols-1 lg:grid-cols-12">
		<div class="post-content-wrapper col-span-8">
			<h1 class="title-big"><?php the_title(); ?></h1>
			
			<div class="post-content">
				<?php the_content(); ?>
			</div>

			<?php
			if ( has_post_thumbnail() ) :
				?>
				<figure class="mb-16 post__image">
					<?php the_post_thumbnail( 'full' ); ?>
				</figure>
				<?php
			endif;
			?>
		</div>
	</div>
</article>