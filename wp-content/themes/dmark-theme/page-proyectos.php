<?php get_header() ?>

<main class="my-5 container py-5">
  <h3 class="mb-5">Proyectos</h3>
  <div class="row">

<!-- LOOP PROYECTOS-->
<?php $arg = array(
 'post_type'     => 'project',
 'posts_per_page' => -1,
 'orderby' => 'rand'
 );

 $get_arg = new WP_Query( $arg );

 while ( $get_arg->have_posts() ) {
 $get_arg->the_post();
 ?>

 <figure class="col-6 col-md-3 project">
   <?php the_post_thumbnail('projects', array('class' => 'w-100 h-auto')); ?>
   <figcaption class="overlay">
     <h4 class="text"><?php the_title() ?></h4>
   </figcaption>
 </figure>

 <?php } wp_reset_postdata(); ?>
<!-- TERMINA LOOP PROYECTOS -->
  </div>
</main>

<?php get_footer() ?>
