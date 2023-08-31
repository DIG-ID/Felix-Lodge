<section class="section-offers container-margins">
	<div class="container-grid">
		<?php
		if ( have_rows( 'section_angebote_angebote' ) ) :
			while ( have_rows( 'section_angebote_angebote' ) ) :
				the_row();
				get_template_part( 'template-parts/components/card-wellness' );
			endwhile;
		endif;
		?>
	</div>
</section>