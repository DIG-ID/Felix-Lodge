<section id="section-intro" class="section-intro pt-16 md:pt-36 lg:pt-72 pb-0 md:pb-16 xl:pb-40 container-margins bg-white overflow-hidden">
    <div class="container-grid pt-28">
        <div class="title-big xl:pb-40"><?php the_title(); ?></div>
    </div>
    <div class="container-grid">
    <?php
    $custom_post_type = 'store';
    $custom_taxonomy = 'category';
    $category_slug = 'clothing';
    $category = get_term_by('slug', $category_slug, $custom_taxonomy);

    if ($category) { ?>
        <div class="title"><?php echo $category->name; ?></div>
    <?php }
    ?>
    </div>
</section>