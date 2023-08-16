<header id="header-main" class="header-main px-8 xl:px-0 w-full top-0 box-border bg-bg-color" itemscope itemtype="http://schema.org/WebSite">
	<nav class="navigation-main container mx-auto" role="navigation" aria-label="<?php esc_attr_e( 'Main navigation', 'paun' ); ?>">
		<div class="navigation-main-content flex flex-col sm:flex-row">
			<div class="w-full mx-auto max-w-7xl flex flex-wrap items-center justify-center px-0 py-6 sm:py-8">
				<div class="header-logo-wrapper mb-4 sm:mb-0">
					<?php 
					$main_logo = get_field('settings_website_logo', 'option');
					if (!empty($main_logo)): ?>
						<a href="<?php echo get_home_url(); ?>">
							<img src="<?php echo esc_url($main_logo['url']); ?>" alt="<?php echo esc_attr($main_logo['alt']); ?>" class="header-logo" />
						</a>
					<?php endif; ?>
				</div>

				<div class="w-full">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main',
							'container'      => false,
							'menu_class'     => 'main-menu-top-level flex text-main-menu uppercase justify-between', // Adjust classes here
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
</header>