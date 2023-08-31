<footer class="footer-main pb-16 container-margins bg-white">
	<div class="footer-content pb-8 pt-24 container-grid border-t-2 border-solid border-black">
		<div class="col-span-1 xl:col-start-2">
		<?php 
		$footer_logo = get_field('settings_website_logo', 'option');
		if( !empty( $footer_logo ) ): ?>
			<img src="<?php echo esc_url($footer_logo['url']); ?>" alt="<?php echo esc_attr($footer_logo['alt']); ?>" class="max-w-full" />
		<?php endif; ?>
		</div>
	</div>
	<div class="footer-content md:py-8 container-grid">
		<div class="col-span-4 md:col-span-4 xl:col-span-3 xl:col-start-2">
			<p class="text-black text-xs sm:text-sm xl:text-xl font-sans font-normal mb-8 md:mt-10">
				<?php the_field( 'contact_address', 'option' ) ?>
			</p>
			<p class="mt-10">
				<a class="text-main-menu" href="tel:<?php the_field( 'contact_phone_number', 'option' ) ?>"><?php the_field( 'contact_phone_number', 'option' ) ?></a>
				<br>
				<a class="text-main-menu" href="mailto:<?php the_field( 'contact_email', 'option' ) ?>"><?php the_field( 'contact_email', 'option' ) ?></a>
			</p>
		</div>
		<div class="col-span-4 md:col-span-4 grid grid-cols-4 md:grid-cols-4">
			<div class="col-span-2 md:col-span-2">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main',
					'container'      => false,
					'menu_class'     => 'menu-footer text-main-menu uppercase mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			</div>
			<div class="col-span-2 md:col-span-2">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'footer_terms',
					'container'      => false,
					'menu_class'     => 'menu-footer text-main-menu uppercase mt-10',
					'items_wrap'     => '<ul id="%1$s" class="%2$s menu-top-level">%3$s</ul>',
					'fallback_cb'    => '__return_false',
				),
			);
			?>
			</div>
		</div>
		<div class="col-span-4 md:col-span-4 xl:col-span-3">
			<p class="text-main-menu uppercase !mb-4 xl:mt-10"><?php esc_html_e( 'Newsletter', 'felixlodge' ) ?></p>
			<p class="text-body xl:mt-14 !mb-0"><?php esc_html_e( 'Melden Sie sich für unseren Newsletter an.', 'felixlodge' ) ?></p>
			<?php 
			$form_shortcode = get_field('settings_newsletter_form_shortcode', 'option');
			echo do_shortcode($form_shortcode);
			?>
		</div>
	</div>
</footer>