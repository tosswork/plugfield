<?php
// Template Name: A Plugfield
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

        <div class="col s12 m5">
          <?php the_content(); ?>
        </div>
        <div class="col s12 m1"></div>
        <div class="col s12 m5">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/plugfield-011.png" />
        </div>

      </div>
    </div>
  </div>

<?php endwhile; else : endif; ?>


  <div class="section a-plugfield-clientes">
    <div class="row">
      <div class="container">
        <h2><?php the_field('a-plugfield-clientes-h2'); ?></h2>
        <?php the_field('a-plugfield-clientes'); ?>
        <div class="col s12">
          <?php echo do_shortcode('[print_responsive_thumbnail_slider]'); ?>
        </div>
      </div>
    </div>
  </div>


  <div class="section a-plugfield-institucional">
    <div class="row">
      <div class="container">

        <h2><?php the_field('a-plugfield-institucional-h2'); ?></h2>
        <h4><?php the_field('a-plugfield-institucional-descricao'); ?></h4>

        <div class="col s12 m2"></div>
        <div class="col s12 m8">
          <div class="video-container">
            <?php the_field('a-plugfield-institucional-video'); ?>
          </div>
        </div>
        <div class="col s12 m2"></div>

      </div>
    </div>
  </div>

<?php get_footer(); ?>
