<?php get_header() ?>

<main class="my-5 container my-5 py-5">
  <h3>Blog</h3>
  <p class="mb-5">Últimas entradas</p>
  <?php $arg = array(
     'post_type'     => 'post',
     'posts_per_page' => -1
     );

     $get_arg = new WP_Query( $arg );

     while ( $get_arg->have_posts() ) {
     $get_arg->the_post();
     ?>

     <article class="row entrada text-left mb-4">
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
     <a href="<?php echo get_home_url()?>" class="btn btn-orange btn-lg mt-5">Volver al inicio</a>
   </div>
</div>
</main>

<?php get_footer() ?>
