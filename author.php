<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-resultados">
        <div class="container">
          <div class="page-heading-title">
            <h1>Viendo contenido de <br> <?php the_author(); ?></h1>
          </div>
            <?php include(TEMPLATEPATH . '/include-section-category-author-grid.php'); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
