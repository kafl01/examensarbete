<?php get_header(); ?>
<section class="frontpage-hero-wrapper">
    <div class="frontpage-hero-img-left">
        <img src="<?php echo get_theme_file_uri('/images/konsult.jpeg') ?>">
    </div>
    <div class="frontpage-hero-div-right">
        <h1 class="frontpage-hero-heading">Vi har lång erfarenhet inom målerikonservering och restaurering</h1>
        <button class="btn-primary"><a href="<?php echo get_permalink(77); ?>">Om företaget</a></button>
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
        <?php
            echo '<a class="cat-link-wrapper" href="' . get_category_link($category->term_id) . '">
                    <div class="frontpage-cat-img">
                        <img alt=falsterbo kyrka målningar på altarskåpet src="' . get_theme_file_uri('/images/falsterbo kyrka målningar på altarskåpet.jpeg') . '">
                    </div>
                    <p class="frontpage-cat-title">' . $category->name . '</p></a>';
        }
        ?>
    </div>
</section>
<?php get_footer(); ?>