<?php get_header(); ?>

    <div class="footer-over">
      <div class="page page-content page-resultados">
        <div class="container">
          <div class="page-heading-title">
            <h1>Estás viendo la categoría <br> <?php echo single_cat_title(); ?></h1>
          </div>
            <?php include(TEMPLATEPATH . '/include-section-category-author-grid.php'); ?>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
