<?php
// Template Name: Revendas
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


      <div class="col s12 m12 l3 revendas-lista">
        <h4>Se você é <b>consumidor final</b>, saiba onde encontrar uma loja e adquira já a sua:</h4>

        <div class="revendas-lista-menu">

          <!-- SIDEBAR -->
          <div>
            <div style=" background: #eaeaea; width: 20px; height: 20px; position: absolute; "></div>
            <?php if ( is_active_sidebar('sidebar-revendas') ) {
                dynamic_sidebar('sidebar-revendas');
            } ?>
          </div>

        </div>

      </div>

      <div class="col s12 m12 l1"></div>

      <!-- Revendas resultados -->
      <div class="col s12 m12 l8 revendas-lista-boxes">

        <p><i class="material-icons">aspect_ratio</i> Clique nas revendas abaixo para visualizar:<p>

          <?php
           $args = array( 'post_type' => 'revendas', 'posts_per_page' => 24, 'orderby' => 'rand' );
           $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <div class="col s12 m6 l4 revendas">
             <a href="<?php the_permalink(); ?>">
               <?php if ( has_post_thumbnail() ) {
                 $image_src = wp_get_attachment_image_src( get_post_thumbnail_id(), '');
                 echo '<img class="responsive-img" src="' . $image_src[0] . '">';
               }
               ?>
             </a>
             <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
           </div>
          <?php endwhile; ?>

      </div>
      <!-- Revendas resultados fecha -->

    </div>
  </div>
</div>


<?php get_footer(); ?>
