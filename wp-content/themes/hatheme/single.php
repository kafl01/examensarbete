<?php get_header(); ?>
<section class="section-wrapper">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h2><?php the_title(); ?></h2>
            <div class="single-div">
                <div class="single-img">
                    <img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
                </div>
                <div class="single-excerpt"><?php the_excerpt(); ?></div>
            </div>
            <div class="single-content"><?php the_content(); ?></div>
    <?php
        endwhile;
    endif;
    ?>
</section>