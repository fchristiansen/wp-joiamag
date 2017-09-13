<?php
if (in_category('2')) {
	include (TEMPLATEPATH . '/single-entrevista.php');
}else{
  $args = array (
    'post_type' => 'post',
    'posts_per_page' => 1
  );
  $the_query = new WP_Query ($args);
  if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        if(get('plantilla_tipo_de_plantilla')=='Con sidebar'){
           include (TEMPLATEPATH . '/single-con-barra.php');
        }elseif(get('plantilla_tipo_de_plantilla')=='Sin sidebar'){
          include (TEMPLATEPATH . '/single-sin-barra.php');
        }
      endwhile; else:
      endif;
      wp_reset_postdata();

}?>


