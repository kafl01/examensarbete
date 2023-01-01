<?php get_header(); ?>
<section class="section-wrapper">
    <h2 class="cat-heading"><?php single_cat_title('', true); ?></h2>
    <div class="archive-div">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <a class="archive-link-wrapper" href=<?php the_permalink(); ?>>
                    <div class="archive-img">
                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
                    </div>
                    <?php the_title('<p class="cat-title">', '</p>'); ?>
                </a>
        <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
<section class="frontpage-cat-wrapper">
    <div class="frontpage-category-div">
        <?php
        $categories = get_categories(array(
            'orderby' => 'name',
            'order'   => 'ASC'
        ));
        foreach ($categories as $category) {
        ?>
        <?php
            echo '<a class="cat-link-wrapper" href="' . get_category_link($category->term_id) . '">
                    <button class="frontpage-cat-title btn-secondary">' . $category->name . '</button></a>';
        }
        ?>
    </div>
</section>
<?php get_footer(); ?>