<section id="section-intro" class="section-intro pt-16 md:pt-36 lg:pt-72 pb-0 md:pb-16 xl:pb-40 container-margins bg-white overflow-hidden">
    <div class="container-grid pt-28 lg:pt-0">
        <div class="title-big xl:pb-40"><?php the_title(); ?></div>
    </div>
    <?php
        // Assuming your custom post type slug is "custom_post_type" and the category taxonomy slug is "category_taxonomy"
        $taxonomy_slug = 'category';
        $custom_post_type_slug = 'store';

        // Step 2: Retrieve available categories
        $categories = get_terms([
            'taxonomy' => $taxonomy_slug,
            'hide_empty' => false,
        ]);

        // Step 3: Loop through categories and display posts
        foreach ($categories as $category) {
            echo '<div class="container-grid">';
            echo '<div class="title pb-16">' . $category->name . '</div>';
            echo '</div>';
            echo '<hr class="border-t-2 border-black">';

            $posts_query = new WP_Query([
                'post_type' => $custom_post_type_slug,
                'tax_query' => [
                    [
                        'taxonomy' => $taxonomy_slug,
                        'field' => 'slug',
                        'terms' => $category->slug,
                    ],
                ],
            ]);

            if ($posts_query->have_posts()) {
                echo '<ul>';
                while ($posts_query->have_posts()) {
                    $posts_query->the_post();
                    echo '<li>';
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('square-image');
                    }
                    echo '</li>';
                }
                echo '</ul>';
            }

            wp_reset_postdata();
        }
        ?>


    </div>
</section>