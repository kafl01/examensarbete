<?php wp_head(); ?>
<section class="section-wrapper">
    <h1 class="search-header">404</h1>
    <div class="search-wrapper">
        <p>Denna sidan finns inte. Prova att söka efter det du letar efter.</p>
        <div class="form-404"><?php get_search_form(); ?></div>
        <p>
            <a href=<?php echo site_url(); ?>>Gå tillbaka till startsidan</a>
        </p>
    </div>
</section>