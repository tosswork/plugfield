<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas" style="background-image: url('<?php the_field('topo-background'); ?>'); ">
  <div class="row">
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
      <h1><?php the_title(); ?></h1>
      <h4><?php the_field('h3'); ?></h4>
    </div>
  </div>
</div>
<!-- Fecha Titulo da Pagina -->





<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="section main">
  <div class="row">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php endwhile; else : endif; ?>

<?php get_footer(); ?>
