<?php get_header(); ?>
<section class="section-wrapper align-unset">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h1><?php the_title(); ?></h1>
            <div class="page-div">
                <div class="page-img">
                    <?php echo ((has_post_thumbnail()) ? the_post_thumbnail() : '') ?>
                </div>
            </div>
            <div class="single-content"><?php the_content(); ?></div>
    <?php
        endwhile;
    endif;
    ?>
</section>
<?php
get_footer();
?>