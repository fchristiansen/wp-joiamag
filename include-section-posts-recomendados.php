   <section class="recomendado">
     <div class="container">
        <h2 class="text-uppercase text-center"> Contenido recomendado</h2>
             <div class="row">
               <?php $orig_post = $post;
                     global $post;
                     $tags = wp_get_post_tags($post->ID);
                     if ($tags) {
                       $tag_ids = array();
                       foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;

                       $args=array(
                         'post_type'     => array('post'),
                         'tag__in'       => $tag_ids,
                         'post__not_in'    => array($post->ID),
                         'posts_per_page'  => 4
                       );

                 $my_query = new WP_Query( $args );
                 if( $my_query->have_posts() ) {
                   while( $my_query->have_posts() ) {
                   $my_query->the_post(); ?>
                   <div class="col-md-4 mb-3">
                     <div class="card post-general">
                       <div class="card-img-top">
                         <a href="<?php the_permalink(); ?>">
                                <?php
                                   if (class_exists('MultiPostThumbnails')) :
                                   MultiPostThumbnails::the_post_thumbnail(get_post_type(), 'secondary-image', NULL,  'imagen-destacada-secundaria');
                                   endif;
                               ?>
                         </a>
                       </div>
                       <div class="card-body">
                         <p class="card-meta mb-0">
                           <a href="javascript:void(0);">
                             <i class="icon-section-features"></i> <?php exclude_post_categories("10");//the_category( ', ', '', false); ?>
                           </a>
                         </p>
                         <h1 class="card-title">
                           <a href="<?php the_permalink(); ?>">
                             <?php the_title(); ?>
                           </a>
                         </h1>
                         <p class="card-author mb-0">
                            <?php the_author_posts_link(); ?> Hace <?php echo  human_time_diff( get_the_time('U'), current_time('timestamp') ) ; ?>
                         </p>
                       </div>
                     </div> <!-- general -->
                   </div>
             <? }
                 }
               }
               $post = $orig_post;
               wp_reset_query(); ?>

         </div><!-- grilla recommendados -->
     </div> <!-- container -->

   </section>

