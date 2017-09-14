<?php
if (in_category('2')) {
	include (TEMPLATEPATH . '/single-entrevista.php');
}else{
    if (have_posts()) :
       while (have_posts()) :
         the_post();
         $tipo_plantilla = get('plantilla_tipo_de_plantilla');
    endwhile;
    endif;

        if($tipo_plantilla=='Con sidebar'){
            include (TEMPLATEPATH . '/single-con-barra.php');
        }elseif($tipo_plantilla=='Sin sidebar'){
            include (TEMPLATEPATH . '/single-sin-barra.php');
        }

}?>


