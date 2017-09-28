<?php
$pagename = get_query_var('pagename');  
if ( !$pagename && $id > 0 ) {  
    // If a static page is set as the front page, $pagename will not be set. Retrieve it from the queried object  
    $post = $wp_query->get_queried_object();  
    $pagename = $post->post_name;  
}
$show_shop_footer = false;
//echo $pagename;
if(is_page('carrito') || is_page('finalizar-compra') || is_page('mi-cuenta')) {
	$show_shop_footer = true;
	get_header( 'shop' ); ?>
    <div class="footer-over">
      <div class="page page-content page-resultados">
        <div class="container">
         <div class="page-heading-title page-heading-title-tienda">
            <h1 class="title-tienda">JOIA tienda</h1>
        </div>
<?
}
?>
<h1 class="entry-title <?php echo $pagename;?>"><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>

<?php if($show_shop_footer) : ?>
</div><!-- container -->
</div><!-- page-resultados -->
<div class="clear"></div>
</div><!-- footer-over -->
<?php endif;?>