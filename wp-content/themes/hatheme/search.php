<?php get_header(); ?>

<section class="section-wrapper">
    <h2>Din sökning gav följande resultat:</h2>
    <div class="search-div">
        <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <a class="search-link-wrapper" href=<?php the_permalink(); ?>>
                    <?php the_title('<p>', '</p>'); ?>
                </a>
        <?php
            endwhile;
        else :
            echo ('<p>Tyvärr, inget matchade din sökning. <a href="' . site_url() . '">Gå tillbaka till startsidan.</a></p>');
        endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>