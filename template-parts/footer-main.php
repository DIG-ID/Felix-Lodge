<footer class="footer-main pb-16 container-margins bg-white">
	<div class="footer-content pb-8 pt-12 md:pt-24 container-grid border-t-2 border-solid border-black">
		<div class="col-span-1 xl:col-start-2">
		<?php 
		$footer_logo = get_field( 'settings_website_logo', 'option' );
		if ( ! empty( $footer_logo ) ) : ?>
			<img src="<?php echo esc_url( $footer_logo['url'] ); ?>" alt="<?php echo esc_attr( $footer_logo['alt'] ); ?>" class="max-w-full" />
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
			<div class="flex items-center mt-10 mb-10 lg:mb-0">
				<?php
				$facebook = get_field( 'socials_facebook_url', 'options' );
				if ( $facebook ) :
					?>
					<a href="<?php echo esc_url( $facebook ); ?>" target="_blank "class="inline-block mr-4"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></a>
					<?php
				endif;
				$instagram = get_field( 'socials_instagram_url', 'options' );
				if ( $instagram ) :
					?>
					<a href="<?php echo esc_url( $instagram ); ?>" target="_blank "class="inline-block"><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
					<?php
				endif;
				?>
			</div>
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
		<div class="col-span-4 md:col-span-4 xl:col-span-3 mt-9 md:mt-16 xl:mt-0">
			<p class="text-main-menu uppercase !mb-4 xl:mt-10"><?php esc_html_e( 'Newsletter', 'felixlodge' ) ?></p>
			<p class="text-body xl:mt-10 !mb-0"><?php esc_html_e( 'Melden Sie sich für unseren Newsletter an.', 'felixlodge' ) ?></p>
			<?php 
			$form_shortcode = get_field( 'settings_newsletter_form_shortcode', 'option' );
			echo do_shortcode( $form_shortcode );
			?>
		</div>
	</div>
</footer>