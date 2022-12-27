<?php
get_header();
?>
<main class="main-wrapper">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title();
        endwhile;
    endif;
    ?>
</main>


<?php
get_footer();
?>