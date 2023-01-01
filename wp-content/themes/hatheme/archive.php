<?php get_header(); ?>

<section class="section-wrapper">
    <h2 class="cat-heading">Våra kompetensområde</h2>
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

<?php get_footer(); ?>