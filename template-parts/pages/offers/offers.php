<section class="section-offers container-margins">
	<div class="container-grid">
		<?php
		$offer_args   = array(
			'post_type'   => 'angebot',
			'order'       => 'ASC',
			'orderby'     => 'date',
			'post_status' => 'publish',
			'nopaging'    => true,
		);
		$offers_query = new WP_Query( $offer_args );
		if ( $offers_query->have_posts() ) :
			while ( $offers_query->have_posts() ) :
				$offers_query->the_post();
				get_template_part( 'template-parts/components/card-offer' );
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</section>