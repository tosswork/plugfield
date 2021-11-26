<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas">
  <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="container">
        <?php the_content(); ?>
      </div>
    <?php endwhile; else : ?>
      <div class="container">
        <?php _e( '<h1 style="width: 100%; ">Ops! Nada foi encontrado.</h1><h4>Faça <a href="/"> uma busca</a> ou <a href="https://pumatronix.com/contato/">entre em contato</a>.</h4>' ); ?>
      </div>
    <?php endif; ?>

  </div>
</div>
<!-- Fecha Titulo da Pagina -->





<?php get_footer(); ?>
