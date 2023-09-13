<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-wellness col-span-4 md:col-span-8 xl:col-span-6 mb-20' ); ?>>
	<h2 class="title mb-3 md:mb-7"><?php the_sub_field( 'title' ); ?></h2>
	<?php
	$image = get_sub_field( 'image' );
	if ( $image ) :
		echo wp_get_attachment_image( $image, 'full', false, array( 'class' => 'mb-7 md:mb-8 max-h-[615px] w-full object-cover' ) );
	endif;
	?>
	<div class="card-wellness-content grid grid-cols-6">
		<div class="card-offer-description col-span-6 md:col-span-3">
			<p class="text-body"><?php the_sub_field( 'description' ); ?></p>
		</div>
		<?php
		$additional_notes = get_sub_field( 'additional_notes' );
		if ( $additional_notes ) :
			echo '<div class="card-offer-notes col-span-6 pt-2 md:pt-0 md:col-span-3 relative md:ml-6 pl-6 border-black before:content-[\'\'] before:block before:absolute before:top-0 before:left-0 before:border-l before:border-black before:h-[60px]"><p class="title-subtitle break-words">' . $additional_notes . '</p></div>';
		endif;
		?>
	</div>
</article>
