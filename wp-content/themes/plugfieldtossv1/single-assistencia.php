<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas no-image">
  <div class="row">
    <div class="container">
      <h1><?php the_title(); ?> . <?php the_field('h3'); ?></h1>
      <div class="line"></div>
      <a href="javascript:history.back()"><h3><i class="material-icons">chevron_left</i>Voltar</h3></a>
    </div>
  </div>
</div>
<!-- Fecha Titulo da Pagina -->


<div class="section main">

  <div class="row revenda-interna">
    <div class="container">

      <!-- breadcrumb -->
      <div class="col s12 breadcrumb">
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
        ?>
      </div>
      <!-- breadcrumb -->

      <div class="col s12 m5">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; else : endif; ?>
          <p><?php the_field('revendas-endereco'); ?></p>
          <p><a href="<?php the_field('assistencia-contato'); ?>" class="btn" target="_blank"><i class="material-icons" target="_blank">launch</i> Entrar em contato</a></p>
      </div>
      <div class="col s12 m1"></div>
      <div class="col s12 m6">
        <?php the_field('revendas-mapa'); ?>
      </div>

    </div>
  </div>


<?php get_footer(); ?>
