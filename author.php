<?php get_header();?>
<?php $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
$user_roles=$curauth->roles; 
//print_r($user_roles);?>
    <div class="footer-over">
      <div class="page page-content page-resultados">
        <div class="container">
          <div class="page-heading-title">
            <h1>Viendo contenido de <br> <?php the_author(); ?></h1>
          </div>
            <?php 
              if (in_array("creador", $user_roles) || in_array("shop_manager", $user_roles) ) : 
                  wc_get_template( 'content-product_author.php');
              else :  
                include(TEMPLATEPATH . '/include-section-category-author-grid.php'); 
              endif;?>
        </div>
      </div>
    </div>
<?php get_footer(); ?>