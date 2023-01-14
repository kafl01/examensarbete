<!-- Structure for the Competence area page, id 74  -->
<?php get_header(); ?>
<section class="section-wrapper">
    <div class="competence-heading-wrapper">
        <h2>Våra kompetensområde</h2>
        <ul class="competence-list">
            <li>Vi utför all förekommande målerikonservering och restaurering.</li>
            <li>Nyutförande av förgyllning och dekorationsmålning.</li>
            <li>Konsultuppdrag relaterade till byggnadsvård och konservering.</li>
        </ul>
    </div>
    </div>
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
                        <img alt="falsterbo kyrka målningar på altarskåpet" src="' . get_theme_file_uri('/images/falsterbo_kyrka.jpeg') . '">
                    </div>
                    <p class="frontpage-cat-title">' . $category->name . '</p></a>';
        }
        ?>
    </div>
</section>
<?php get_footer(); ?>