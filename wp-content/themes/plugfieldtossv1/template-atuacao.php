<?php
// Template Name: Atuacao
?>


<?php get_header(); ?>


<!-- Titulo da Pagina -->
<div class="section titulo-paginas video" style="background-image: url('<?php the_field('topo-background'); ?>'); ">
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
      <h1><?php the_field('h1'); ?></h1>
      <h4><?php the_field('h4'); ?></h4>
    </div>
  </div>
</div>
<!-- Fecha Titulo da Pagina -->

<!-- VIDEO -->
<video autoplay muted loop id="myVideo-desktop">
  <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/pumatronix-atuacao-1.mp4" type="video/mp4">
</video>

<video autoplay muted loop id="myVideo-mobile">
  <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/pumatronix-atuacao-1.mp4" type="video/mp4">
</video>



<div class="section main">

  <div class="row">

    <div class="container">
      <div class="col s12 m6">
        <p>Investimos no desenvolvimento de pesquisas associadas a novas tecnologias que agregam às suas soluções e na ampliação de negócios. Somos líderes na fabricação de equipamentos para controle de Evasão de Pedágios. Com tecnologia para garantir a segurança e a qualidade do fluxo de veículos e pessoas também na <b>Gestão de Tráfego</b>, <b>Fiscalização</b> e <b>Cercamento Eletrônico</b>.</p>
      </div>
      <div class="col s12 m1"></div>
      <div class="col s12 m5">
        <h3>Obtenha o máximo em eficiência com nossos produtos.</h3>
      </div>
    </div>

    <!-- CARROSSEL -->
    <div class="atuacao carousel-slider">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php
           $args = array( 'post_type' => 'atuacao', 'posts_per_page' => 6 );
           $loop = new WP_Query( $args ); while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <div class="swiper-slide" style=" background-image: url('<?php the_field('foto_thumb'); ?>') ">
             <a href="<?php the_permalink(); ?>">
             <div class="gradiente">
               <div class="cont">
                 <h4><?php the_title(); ?></h4>
                 <p><?php the_field('thumbnail_box_legenda'); ?></p>
               </div>
               <i class="material-icons">chevron_right</i>
             </div>
             </a>
           </div>
          <?php endwhile; ?>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <!-- CARROSSEL fecha -->

    <!-- Swiper JS -->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/_carousel/package/js/swiper.min.js"></script>
    <script>
      var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        autoplay: {
          delay: 3000,
        },
        breakpoints: {
          600: {
            slidesPerView: 2,
            spaceBetween: 5,
          },
          992: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          1280: {
            slidesPerView: 4,
            spaceBetween: 15,
          },
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    </script>
    <!-- Swiper JS fecha -->
  </div>

  <div class="row atuacao-secao-2">
    <div class="barra-esquerda"></div>
    <div class="container">

      <div class="col s12">
        <h4>RELACIONADOS</h4>
        <h2>Mercado</h2>
      </div>

      <article>
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
          'cat' => '39',
          'posts_per_page' => 4,
          'paged' => $paged
        );
        query_posts($args);
      ?>
      <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

        <div class="col s12 m6">
          <span class="data"><?php echo get_the_date(); ?></span>
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
          <?php the_excerpt(); ?>
        </div>

      <?php endwhile; else: endif; ?>
      </article>

    </div>
  </div>



</div>


<?php get_footer(); ?>
