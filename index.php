<?php get_header(); ?>

    <div class="footer-over">
      <div class="home-content">
        <?php include(TEMPLATEPATH . '/include-section-carousel-home.php'); ?>
        <section class="section news-features">
          <div class="container">
            <!-- posts destacados -->
            <?php include(TEMPLATEPATH . '/include-section-posts-destacados.php'); ?>
            <!-- grilla de posts -->
            <?php include(TEMPLATEPATH . '/include-section-posts-generales.php'); ?>
          </div>
        </section> <!--  -->

        <!-- banner destacado central -->
        <?php include(TEMPLATEPATH . '/include-section-destacado-central-home.php'); ?>
        <!-- joia tv -->
        <?php include(TEMPLATEPATH . '/include-section-joia-tv.php'); ?>
        <!-- tienda -->
        <?php include(TEMPLATEPATH . '/include-section-store.php'); ?>
        <!-- mas leido esta semana y mes -->
        <?php include(TEMPLATEPATH . '/include-section-mas-leido.php'); ?>
        <!-- caja newsletter -->
        <?php include(TEMPLATEPATH . '/include-section-buscar.php'); ?>
      </div>
    </div>

<?php get_footer(); ?>


