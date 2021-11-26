<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas" style="background-image: url('https://plugfield.com.br/wp-content/uploads/2021/08/plugfield-005.jpg'); ">
  <div class="row">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="line"></div>
      <h3><?php the_category( ' ' ); ?></h3>
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

      <div class="col s12 m12 l3">

        <div class="siderbar">
          <?php get_sidebar(); ?>
        </div>

      </div>

      <div class="col s12 m12 l1"></div>

      <div class="col s12 m12 l8">
        <?php the_content(); ?>
      </div>

    </div>
  </div>
</div>

<?php endwhile; else : endif; ?>


<?php get_footer(); ?>
