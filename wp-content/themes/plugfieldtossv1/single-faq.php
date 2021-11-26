<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas" style="background-image: url('<?php the_field('topo-background'); ?>'); ">
  <div class="row">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <div class="line"></div>
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

        <div class="col s12 m7">
          <?php the_content(); ?>
        </div>
        <div class="col s12 m1"></div>
        <div class="col s12 m4">
          <div class="suporte-lista">

            <?php
            $args = array( 'post_type' => 'faq', 'posts_per_page' => 3, 'orderby' => 'rand' );
            query_posts($args); ?>
            <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <a href="<?php the_permalink(); ?>" class="btn">Ver resposta</a>
              <div class="divider"></div>
            <?php endwhile; else : endif; ?>

          </div>
      </div>
    </div>
  </div>

<?php endwhile; else : endif; ?>


<?php get_footer(); ?>
