<?php
if (in_category('2')) {
	include (TEMPLATEPATH . '/single-entrevista.php');
}else{
    if (have_posts()) :
       while (have_posts()) :
         the_post();
        if(get('plantilla_tipo_de_plantilla')=='Con sidebar'){
            include (TEMPLATEPATH . '/single-con-barra.php');
        }elseif(get('plantilla_tipo_de_plantilla')=='Sin sidebar'){
            include (TEMPLATEPATH . '/single-sin-barra.php');
        }
    endwhile;
    endif;
}?>


