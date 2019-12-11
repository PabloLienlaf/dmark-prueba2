<?php get_header() ?>

<header id="intro" class="text-white pt-5">
  <div class="container">
    <h1><?php get_template_part('_includes/logo', 'main') ?></h1>
    <h2><?php echo bloginfo('description') ?></h2>
    <a href="#services" class="text-white"><i class="fas fa-arrow-circle-down fa-4x my-5"></i></a>
  </div>
</header>

<section id="services" class="py-5">
  <div class="container">
    <h3 class="mb-5">Servicios</h3>
    <div class="row">
      <!-- LOOP SERVICIOS -->
      <?php $arg = array(
         'post_type'     => 'service',
         'posts_per_page' => 3
         );

         $get_arg = new WP_Query( $arg );

         while ( $get_arg->have_posts() ) {
         $get_arg->the_post();
         ?>

         <div class="col-md-4 my-3">
           <?php the_field('icon') ?>
           <h4 class="my-3 text-orange"><?php the_title() ?></h4>
           <p><?php the_excerpt() ?></p>
         </div>

         <?php } wp_reset_postdata(); ?>
      <!-- TERMINA LOOP SERVICIOS -->
</section>

<section id="projects" class="py-5 bg-light">
  <div class="container">
    <h3 class="mb-5">Proyectos</h3>
    <div class="row">

<!-- LOOP PROYECTOS-->
<?php $arg = array(
   'post_type'     => 'project',
   'posts_per_page' => 8,
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
    <div>
      <a href="<?php the_permalink( $post = 56, $leavename = false ) ?>" class="btn btn-orange btn-lg mt-5">Ver todos los proyectos</a>
    </div>
  </div>
</section>

<section id="blog" class="py-5">
  <div class="container">
    <h3>Blog</h3>
    <p class="mb-5">Última entrada</p>

      <?php $arg = array(
       'post_type'     => 'post',
       'posts_per_page' => 1
       );

       $get_arg = new WP_Query( $arg );

       while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       ?>
       <article class="row entrada text-left">
         <div class="col-md-4">
           <?php the_post_thumbnail('entradas', array('class' => 'w-100 h-auto')); ?>
         </div>
         <div class="col-md-8">
           <p class="text-muted my-3"><i class="fas fa-calendar-alt"></i> <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time></p>
           <h3><?php the_title() ?></h3>
           <h4><?php the_category(' '); ?></h4>
           <?php the_excerpt(); ?>
           <p><?php the_tags( '<span class="text-orange">#</span>', ' <span class="text-orange">#</span>', '' ); ?></p>
           <p class="text-center text-md-left"><a href="<?php the_permalink(); ?>" class="btn btn-outline-orange my-3">Ver entrada</a></p>
         </div>
       </article>
       <?php } wp_reset_postdata(); ?>

       <div>
         <a href="blog" class="btn btn-orange btn-lg mt-5">Visita el Blog</a>
       </div>
  </div>
</section>
<?php get_footer() ?>
