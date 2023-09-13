<section class="section-schedule container-margins mb-14 md:mb-24 xl:mb-60">
	<div class="container-grid">
		<div class="xl:col-start-3 col-span-4 md:col-span-4 xl:col-span-3 mb-12 lg:mb-10 md:mb-0">
			<h2 class="title mb-6 md:mb-8"><?php the_field( 'section_schedule_title' ); ?></h2>
			<p class="text-body"><?php the_field( 'section_schedule_description_1' ); ?></p>
			<p class="title-subtitle mb-4 md:mb-8"><?php the_field( 'section_schedule_schedule' ); ?></p>
			<div class="flex">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" class="w-full max-w-[24px] mr-3">
					<path d="M11 10.98C11 10.7148 11.1054 10.4605 11.2929 10.2729C11.4804 10.0854 11.7348 9.98002 12 9.98002C12.2652 9.98002 12.5196 10.0854 12.7071 10.2729C12.8946 10.4605 13 10.7148 13 10.98V16.98C13 17.2452 12.8946 17.4996 12.7071 17.6871C12.5196 17.8747 12.2652 17.98 12 17.98C11.7348 17.98 11.4804 17.8747 11.2929 17.6871C11.1054 17.4996 11 17.2452 11 16.98V10.98ZM12 6.05103C11.7348 6.05103 11.4804 6.15638 11.2929 6.34392C11.1054 6.53145 11 6.78581 11 7.05103C11 7.31624 11.1054 7.5706 11.2929 7.75813C11.4804 7.94567 11.7348 8.05102 12 8.05102C12.2652 8.05102 12.5196 7.94567 12.7071 7.75813C12.8946 7.5706 13 7.31624 13 7.05103C13 6.78581 12.8946 6.53145 12.7071 6.34392C12.5196 6.15638 12.2652 6.05103 12 6.05103Z" fill="black"/>
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12C2 17.523 6.477 22 12 22C17.523 22 22 17.523 22 12C22 6.477 17.523 2 12 2ZM4 12C4 14.1217 4.84285 16.1566 6.34315 17.6569C7.84344 19.1571 9.87827 20 12 20C14.1217 20 16.1566 19.1571 17.6569 17.6569C19.1571 16.1566 20 14.1217 20 12C20 9.87827 19.1571 7.84344 17.6569 6.34315C16.1566 4.84285 14.1217 4 12 4C9.87827 4 7.84344 4.84285 6.34315 6.34315C4.84285 7.84344 4 9.87827 4 12Z" fill="black"/>
				</svg>
				<p class="text-body !mb-0"><?php the_field( 'section_schedule_warning' ); ?></p>
			</div>

		</div>
		<div class="xl:col-start-6 col-span-2 md:col-span-1 xl:col-span-2 hidden md:flex justify-center">
			<span class="h-full w-[2px] bg-black block"></span>
		</div>
		<div class="col-span-3 md:col-span-3">
			<svg xmlns="http://www.w3.org/2000/svg" width="49" height="49" viewBox="0 0 49 49" fill="none" class="mb-8 max-w-[26px] md:max-w-none">
				<g clip-path="url(#clip0_42_534)">
					<path d="M3.0699 17.3342C4.0799 17.7745 5.2599 17.3141 5.6999 16.3033C8.9599 8.83722 16.3399 4.00327 24.4999 4.00327C32.6599 4.00327 40.0299 8.82721 43.2999 16.3033C43.6299 17.0539 44.3599 17.5043 45.1299 17.5043C45.3999 17.5043 45.6699 17.4542 45.9299 17.3342C46.9399 16.8938 47.3999 15.7128 46.9599 14.702C43.0599 5.76471 34.2399 0 24.4999 0C14.7599 0 5.9399 5.76471 2.0399 14.702C1.5999 15.7128 2.0599 16.8938 3.0699 17.3342Z" fill="black"/>
					<path d="M47.0002 22.4984H46.9602C41.9402 22.4984 37.1502 24.0096 33.1102 26.8119C32.8902 24.7102 32.4202 22.6385 31.6802 20.6769C30.4302 17.3642 28.4302 14.3017 25.9002 11.8197C25.1202 11.0591 23.8802 11.0591 23.1102 11.8197C20.7702 14.1115 18.9302 16.8037 17.6602 19.8262C16.7202 22.068 16.1202 24.41 15.8802 26.8019C11.8402 24.0096 7.05023 22.4984 2.03023 22.4984H1.99023C0.890234 22.4984 -0.00976562 23.3991 -0.00976562 24.5C-0.00976562 38.0111 10.9802 49 24.4902 49C38.0002 49 48.9902 38.0111 48.9902 24.5C48.9902 23.3991 48.1002 22.4984 46.9902 22.4984H47.0002ZM21.3402 21.3775C22.1302 19.4859 23.1902 17.7545 24.4902 16.1932C25.9502 17.9447 27.1302 19.9563 27.9302 22.0881C28.8902 24.6401 29.3402 27.4024 29.2302 30.1246C29.0002 30.3648 28.8002 30.625 28.5802 30.8752C28.3802 31.0954 28.1802 31.3156 27.9902 31.5458C27.6602 31.9461 27.3602 32.3664 27.0502 32.7968C26.9102 32.997 26.7502 33.1871 26.6202 33.3873C26.2002 34.0178 25.8002 34.6783 25.4302 35.3489C25.4102 35.3789 25.4002 35.4189 25.3802 35.459C25.0602 36.0595 24.7602 36.67 24.4902 37.2905C24.2302 36.69 23.9402 36.1095 23.6402 35.529C23.6102 35.469 23.5802 35.3989 23.5502 35.3389C23.1902 34.6683 22.7902 34.0178 22.3702 33.3873C22.2202 33.1671 22.0602 32.9569 21.9002 32.7468C21.6102 32.3364 21.3202 31.9361 21.0002 31.5458C20.8002 31.3056 20.5902 31.0754 20.3802 30.8352C20.1702 30.595 19.9702 30.3448 19.7502 30.1146C19.7402 29.8444 19.7302 29.5742 19.7302 29.3039C19.7302 26.5617 20.2602 23.8895 21.3202 21.3675L21.3402 21.3775ZM4.10023 26.6017C8.73023 27.0621 13.0402 29.0838 16.4002 32.4065C18.3402 34.318 19.8602 36.5699 20.9102 39.0819C21.1502 39.6424 21.3502 40.2129 21.5302 40.7933C21.5802 40.9635 21.6302 41.1236 21.6802 41.2937C21.8102 41.7241 21.9202 42.1644 22.0102 42.6048C22.0502 42.7749 22.0902 42.9351 22.1202 43.1052C22.2302 43.6857 22.3202 44.2762 22.3902 44.8667C12.7602 43.8758 5.09023 36.2096 4.10023 26.5817V26.6017ZM26.6002 44.8867C26.6602 44.2962 26.7502 43.7057 26.8602 43.1252C26.8902 42.9551 26.9302 42.785 26.9702 42.6148C27.0702 42.1745 27.1802 41.7441 27.3002 41.3137C27.3502 41.1436 27.4002 40.9735 27.4502 40.8033C27.6302 40.2329 27.8302 39.6524 28.0702 39.0919C29.1202 36.5799 30.6402 34.328 32.5902 32.4165C35.9402 29.0938 40.2502 27.0721 44.8902 26.6117C43.9002 36.2396 36.2302 43.9059 26.6002 44.8967V44.8867Z" fill="black"/>
				</g>
				<defs>
					<clipPath id="clip0_42_534">
						<rect width="49" height="49" fill="white"/>
					</clipPath>
				</defs>
			</svg>
			<p class="section-descriptions mb-8"><?php the_field( 'section_schedule_description_2' ); ?></p>
			<p class="text-body"><?php the_field( 'section_schedule_additional_notes' ); ?></p>
		</div>
	</div>
</section>
