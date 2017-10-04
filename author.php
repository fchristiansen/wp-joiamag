<?php get_header(); 
$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
$user_roles=$curauth->roles; 
if (in_array("creador", $user_roles)){
//echo "mostrar listado de tienda";
wc_get_template( 'content-product_author.php');
}else{
?>

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
<? } ?>
<?php get_footer(); ?>