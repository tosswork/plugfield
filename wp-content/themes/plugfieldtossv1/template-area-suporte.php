<?php
// Template Name: Área do Cliente - Suporte Técnico
?>


<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas no-image">
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


      <div class="col s12 m3">
        <h4 style=" color: #10444F; ">Navegue:</h4>
        <ul>
          <li><a href="https://plugfield.com.br/login/auth" target="_blank">Acesso a Plataforama</a></li>
          <li><a href="/TOSSPlugfield/suporte-tecnico">Suporte Técnico</a></li>
          <li><a href="/TOSSPlugfield/assistencia-tecnica">Assistência Técnica</a></li>
        </ul>
      </div>
      <div class="col s12 m1"></div>
      <div class="col s12 m8 suporte-lista">
        <?php
         $args = array( 'post_type' => 'faq', 'posts_per_page' => 20 );
         $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col s12">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
           <a href="<?php the_permalink(); ?>" class="btn">Saiba mais</a>
           <div class="divider"></div>
          </div>
        <?php endwhile; ?>
      </div>

    </div>
  </div>
</div>




<?php get_footer(); ?>
