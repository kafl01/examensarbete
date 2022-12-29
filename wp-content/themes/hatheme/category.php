<?php get_header(); ?>

<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="t-center">
            <a href=<?php the_permalink(); ?>>
                <div>
                    <div>
                        <img src="<?php the_post_thumbnail_url('thumbnail'); ?>">
                    </div>
                    <?php the_title('<h2>', '</h2>'); ?>
                </div>
            </a>
        </div>
<?php
    endwhile;
else :
    _e('Sorry, no pages matched your criteria.', 'textdomain');
endif;
