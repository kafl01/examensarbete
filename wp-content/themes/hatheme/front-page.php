<?php get_header(); ?>
<main class="main-wrapper">
    <section class="frontpage-hero-wrapper">
        <div class="frontpage-hero-img-left">
            <img src="<?php echo get_theme_file_uri('/images/konsult.jpeg') ?>">
        </div>
        <div class="frontpage-hero-div-right">
            <h1>Vi har lång erfarenhet inom målerikonservering och restaurering</h1>
            <button class="btn-primary">Om företaget</button>
            <div class="frontpage-hero-img-right">
                <img src="<?php echo get_theme_file_uri('/images/lyngsjo_kyrka.jpeg') ?>">
            </div>
        </div>
    </section>
    <section class="frontpage-cat-wrapper">
        <h2 class="cat-heading">Våra kompetensområde</h2>
        <div class="frontpage-category-div">
            <?php
            $categories = get_categories(array(
                'orderby' => 'name',
                'order'   => 'ASC'
            ));

            foreach ($categories as $category) {
            ?>
                <a class="cat-link-wrapper" href="<?php echo site_url() ?>/<?php echo $category->slug; ?>">
                    <div class="frontpage-cat-img">
                        <img alt='falsterbo kyrka målningar på altarskåpet' src="<?php echo get_theme_file_uri('/images/falsterbo kyrka målningar på altarskåpet.jpeg') ?>">
                    </div>
                    <p class="frontpage-cat-title"><?php echo $category->name; ?></p>
                </a>
            <?php } ?>
        </div>

    </section>
</main>
<?php get_footer(); ?>