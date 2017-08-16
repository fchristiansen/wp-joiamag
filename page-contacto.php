<?php
/*

Template name: Contacto

*/
?>
<?php get_header(); ?>    
    <div class="footer-over">
      <div class="page page-content page-contacto">
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
        <?php  	
          	endwhile;
          endif;
        ?>
          <div class="row justify-content-md-center">
            <div class="col col-md-8">
              <form class="form-contacto">
                <div class="form-group">
                  <label for="name" class="sr-only">Nombre</label>
                  <input type="text" class="form-control" id="name" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <label for="email" class="sr-only">E-mail</label>
                  <input type="email" class="form-control" id="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <label for="asunto" class="sr-only">Asunto</label>
                  <input type="text" class="form-control" id="asunto" placeholder="Asunto">
                </div>
                <div class="form-group">
                  <label for="texto" class="sr-only">Texto</label>
                  <textarea class="form-control" id="texto" rows="3">Texto</textarea>
                </div>
                <div class="captcha text-center mt-5 mb-5">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/captcha.png" width="300">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-black">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>

<?php get_footer(); ?>
