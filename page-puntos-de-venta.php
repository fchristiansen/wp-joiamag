<?
/*

Template name: Puntos de Venta

*/
?>
<?php get_header(); ?>
    
    <div class="footer-over">
      <div class="page page-content page-puntos-de-venta">
        <div class="container">
          <?php
          if (have_posts()) :
          	while (have_posts()) :
          		the_post(); ?>
          <div class="page-heading-title">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="text-block text-block-center text-center">
            <div class="row justify-content-md-center">
              <div class="col col-md-8">
                <?php the_content(); ?>                
              </div>
            </div>
          </div>
        </div>
        <?php  	
          	endwhile;
          endif;
        ?>
        <div class="image-visual">
<!--           <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/img/map.jpg" alt=""> -->
          <div style="height:500px;" id="map-canvas"></div>
        </div>
        <div class="joia-stores">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <h2>Santiago</h2>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
              </div>
              <div class="col-sm-6">
                <h2>Regiones</h2>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
                <div class="store-item">
                  <div class="title">Alta Vida Tienda</div>
                  <p class="mb-0">Merced #839 (Galería Plaza de Armas) Local 140 (stgo centro)</p>
                  <p><a href="javascript:void(0);">facebook.com/altavidatienda</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    
<?php get_footer(); ?>