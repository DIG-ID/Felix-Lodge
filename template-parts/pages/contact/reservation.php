<section class="section-reservation container-margins mb-20 hidden">
	<div class="container-grid mb-14 xl:mb-16">
		<div class="xl:col-start-2 col-span-4 md:col-span-8 xl:col-span-6 grid grid-cols-4 md:grid-cols-8 xl:grid-cols-6 gap-x-5 lg:gap-x-4 xl:gap-x-8">
			<div class="col-span-1">
				<div class="w-full max-w-[120px] border-b-2 inline-block border-black mt-3"></div>
			</div>
			<div class="col-span-3 md:col-span-7 xl:col-span-5">
				<div class="title-subtitle md:max-w-lg"><?php the_field( 'reservation_title' ); ?></div>
			</div>
		</div>
	</div>
	<div class="container-grid">
		<div class="col-span-3 md:col-span-4 xl:col-span-3 xl:col-start-2">
			<p class="text-body"><?php the_field( 'reservation_description' ); ?></p>
		</div>
	</div>
</section>