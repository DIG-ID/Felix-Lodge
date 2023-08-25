<header id="header-main" class="header-main w-full top-0 box-border bg-white fixed z-50 container-margins" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main container-grid" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'paun' ); ?>">
		<div class="navigation-main-content flex flex-col sm:flex-row col-span-4 md:col-span-8 xl:col-span-12">
			<div class="w-full mx-auto flex flex-wrap items-center justify-center px-0 py-[2.6rem]">
				<div class="header-logo-wrapper absolute mb-4 sm:mb-0">
					<?php 
					$main_logo = get_field('settings_website_logo', 'option');
					if (!empty($main_logo)): ?>
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo esc_url($main_logo['url']); ?>" alt="<?php echo esc_attr($main_logo['alt']); ?>" class="header-logo" />
						</a>
					<?php endif; ?>
				</div>

				<div class="w-full relative -top-[26px] sm:-top-[18px] xl:top-0">
					<button id="mobile-menu-toggle" class="mobile-menu-toggle float-right">
						<span class="menu-icon"><img id="menu-icon-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/burger-menu.svg" title="mobile menu" alt="mobile menu"></span>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main',
							'container'      => false,
							'menu_class'     => 'main-menu-top-level block text-main-menu uppercase', // Adjust classes here
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'fallback_cb'    => '__return_false',
							'walker'         => new Left_Right_Menu_Walker(),
							'before'         => '', // Add any necessary HTML before the menu item
							'after'          => '', // Add any necessary HTML after the menu item
						)
					);
					?>
				</div>
			</div>
		</div>
	</nav>
	<div class="mobile-menu">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'main',
				'container'      => false,
				'menu_class'     => 'main-menu-responsive block text-responsive-menu uppercase', // Adjust classes here
				'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'fallback_cb'    => '__return_false',
			)
		);
		?>
	</div>
</header>