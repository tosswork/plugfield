<?php
// Template Name: Quero Revender
?>


<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas" style="background-image: url('<?php the_field('topo-background'); ?>'); ">
  <div class="row">
    <div class="container">
      <h1><?php the_field('h1'); ?></h1>
      <div class="line"></div>
      <h3><?php the_field('h3'); ?></h3>
    </div>
  </div>
</div>
<!-- Fecha Titulo da Pagina -->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="section main">
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

        <div class="col s12 m8">

          <?php the_content(); ?>

          <script>
            document.addEventListener( 'wpcf7mailsent', function( event ) {
              location = 'https://plugfield.com.br/obrigado/';
            }, false );
          </script>

        </div>
        <div class="col s12 m1"></div>
        <div class="col s12 m3"></div>

      </div>
    </div>
  </div>

<?php endwhile; else : endif; ?>


<?php get_footer(); ?>
