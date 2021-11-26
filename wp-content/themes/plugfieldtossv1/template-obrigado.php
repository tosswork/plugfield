<?php
// Template Name: Obrigado
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



  <div class="section">
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
      </div>

      <div class="container">
        <div class="col s12">
          <div class="article">
            <?php $query = new WP_Query('posts_per_page=3'); ?>
             <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <div class="col s12 m6 l4">
              <article>
              <div class="thumb" style=" background: #101010 url('<?php the_field('imagem-box'); ?>') center; background-size: cover; "></div>
              <div class="texto">
                <span class="categoria"><?php the_category(' '); ?></span>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              </div>
              </article>
              </div>
            <?php endwhile; else: endif; ?>
          </div>
        </div>
      </div>

    </div>
  </div>






<?php get_footer(); ?>
